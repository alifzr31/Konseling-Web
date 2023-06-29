<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use App\Models\Konsul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        if (!Auth::user()) {
            return view('auth.login');
        }

        return view('404');
    }

    public function loginstore(Request $request)
    {
        $cred = $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (!Auth::attempt($cred)) {
            return redirect()->route('login')->with(['error' => 'Email or password is incorrect']);
        }

        $user = Auth::user();

        if ($user->role === 'admin') {
            return redirect()->route('dashboard');
        }

        return redirect()->route('index');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
    
    public function create()
    {
        if (!Auth::user()) {
            return view('auth.regist');
        }

        return view('404');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'jk' => 'required',
            'no_telp' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        User::create([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'jk' => $request->jk,
            'no_telp' => $request->no_telp,
            'role' => 'user',
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('login')->with(['success' => 'You can log in now']);
    }

    public function edit()
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        
        $id = Auth::user()->id;
        $user = User::where('id', $id)->get();
        $konsul = Konsul::where('user_id', $id)->get();

        return view('profile', compact(['user', 'konsul']));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'jk' => 'required',
            'no_telp' => 'required',
        ]);

        $id = Auth::user()->id;
        
        User::where('id', $id)->update([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'jk' => $request->jk,
            'no_telp' => $request->no_telp
        ]);

        return redirect()->route('editprofil')->with(['success' => 'Profil anda berhasil diubah']);
    }

    // public function updatepassword(Request $request)
    // {
    //     $this->validate($request, [
    //         'password' => 'required|min:8|confirmed'
    //     ]);

    //     $id = Auth::user()->id;

    //     User::where('id', $id)->update([
    //         'password' => bcrypt($request->password)
    //     ]);

    //     return redirect()->route('editprofil')->with(['success' => 'Password anda berhasil diubah']);
    // }

    
    // ADMIN

    public function dashboard()
    {
        if (!Auth::user() || Auth::user()->role !== 'admin') {
            return redirect()->route('index');
        }
        
        $jml_user = User::where('role', 'user')->count();
        $k_bayar = Konsul::where('status', 'menunggu konfirmasi')->count();
        $jadwal = Konsul::where('status', 'menunggu jadwal tes')->count();
        $contacts = Contact::take(4)->latest()->get();
        // $konsul_beres = Konsul::get();
        // $tes = date_create($konsul_beres->updated_at);
        
        return view('admin.index', compact(['jml_user', 'k_bayar', 'jadwal', 'contacts']));
        // return response()->json(['msg' => $konsul_beres]);
    }

    public function listuser()
    {
        if (!Auth::user() || Auth::user()->role !== 'admin') {
            return redirect()->route('index');
        }
        
        $user = User::latest()->get();
        
        return view('admin.user', compact('user'));
    }

    public function detailuser($id)
    {
        if (!Auth::user() || Auth::user()->role !== 'admin') {
            return redirect()->route('index');
        }
        
        $user = User::where('id', $id)->first();

        return view('admin.detailuser', compact('user'));
    }
}
