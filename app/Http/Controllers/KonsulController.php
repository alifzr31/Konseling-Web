<?php

namespace App\Http\Controllers;

use App\Models\GeneralIdea;
use App\Models\Konsul;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class KonsulController extends Controller
{
    public function konsultasi()
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }

        $id = Auth::user()->id;
        $konsul = Konsul::take(1)->orderBy('created_at', 'desc')->where('user_id', $id)->get();
        $kcount = Konsul::take(1)->orderBy('created_at', 'desc')->where('user_id', $id)->where('status', '!=','selesai')->count();
        $gi = GeneralIdea::take(1)->orderBy('created_at', 'desc')->where('user_id', $id)->first();
        $gicount = GeneralIdea::take(1)->where('user_id', $id)->latest()->count();
        
        return view('konsultasi', compact(['konsul', 'kcount', 'gi', 'gicount']));
    }
    
    public function konsuljiwa()
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }

        $id = Auth::user()->id;
        
        $konsul = Konsul::create([
            'user_id' => $id,
            'kecenderungan' => 'jiwa',
            'status' => 'belum bayar'
        ]);

        return redirect()->route('rekening')->with(['succeaa' => 'Pendaftaran konsultasi berhasil']);
    }

    public function konsulsosial()
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }

        $id = Auth::user()->id;

        $konsul = Konsul::create([
            'user_id' => $id,
            'kecenderungan' => 'sosial',
            'status' => 'belum bayar'
        ]);

        return redirect()->route('rekening')->with(['success' => 'Pendaftaran konsultasi berhasil']);
    }

    public function rekening()
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        
        $id = Auth::user()->id;
        $ks = Konsul::take(1)->where('user_id', $id)->latest()->get();
        
        return view('rekening', compact('ks'));
    }

    public function updatekonsul($id, Request $request)
    {
        $this->validate($request, [
            'bukti_pembayaran' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $bukti_pembayaran = $request->file('bukti_pembayaran');
        $fileName = $bukti_pembayaran->hashName();
        $bukti_pembayaran->storeAs('public/bukti_pembayaran', $fileName);
        
        $konsul = Konsul::where('id', $id)->update([
            'bukti_pembayaran' => $fileName,
            'status' => 'menunggu konfirmasi'
        ]);
        
        return redirect()->route('editprofil')->with(['success' => 'Upload bukti pembayaran berhasil']);
    }


    
    // ADMIN
    public function acc($id)
    {
        if (!Auth::user() || Auth::user()->role !== 'admin') {
            return redirect()->route('index');
        }
        
        $acc = 'pembayaran diterima';
        $start = date('Y-m-d H:i:s');
        
        Konsul::where('id', $id)->update([
            'start_test' => $start,
            'status' => $acc
        ]);

        return back();
    }

    public function detailkonsul($id)
    {
        if (!Auth::user() || Auth::user()->role !== 'admin') {
            return redirect()->route('index');
        }
        
        $konsul = Konsul::where('id', $id)->first();
        $gicount = GeneralIdea::take(1)->where('user_id', $konsul->user_id)->where('konsul_id', $id)->latest()->count();

        return view('admin.detailkonsul', compact(['konsul', 'gicount']));
    }
}
