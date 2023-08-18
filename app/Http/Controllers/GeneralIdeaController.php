<?php

namespace App\Http\Controllers;

use App\Models\GeneralIdea;
use App\Models\Konsul;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GeneralIdeaController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'start_test' => 'required',
            'end_test' => 'required'
        ]);

        GeneralIdea::create([
            'user_id' => $request->user_id,
            'konsul_id' => $request->konsul_id,
            'start_test' => $request->start_test,
            'end_test' => $request->end_test,
            'status' => 'belum'
        ]);

        return back();
    }

    public function mulaites()
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }

        $id = Auth::user()->id;
        $ks = Konsul::take(1)->orderBy('created_at', 'desc')->where('user_id', $id)->first();
        $gi = GeneralIdea::take(1)->orderBy('created_at', 'desc')->where('user_id', $id)->first();

        return view('mulaites', compact(['gi', 'ks']));
    }

    public function submit_tes($id, Request $request)
    {
        $gi = GeneralIdea::where('id', $id)->first();

        if (now() > $gi->end_test) {
            return back();
        } else {
            $this->validate($request, [
                'j1' => 'required',
                'j2' => 'required',
                'j3' => 'required',
                'j4' => 'required',
                'j5' => 'required',
                'j6' => 'required',
                'j7' => 'required',
                'j8' => 'required',
                'j9' => 'required',
                'j10' => 'required',
                'j11' => 'required',
                'j12' => 'required',
                'j13' => 'required',
                'j14' => 'required',
                'j15' => 'required',
                'j16' => 'required',
                'j17' => 'required',
                'j18' => 'required',
                'j19' => 'required',
                'j20' => 'required',
                'j21' => 'required',
                'j22' => 'required',
                'j23' => 'required',
                'j24' => 'required',
                'j25' => 'required',
            ]);

            GeneralIdea::where('id', $id)->update([
                'j1' => $request->j1,
                'j2' => $request->j2,
                'j3' => $request->j3,
                'j4' => $request->j4,
                'j5' => $request->j5,
                'j6' => $request->j6,
                'j7' => $request->j7,
                'j8' => $request->j8,
                'j9' => $request->j9,
                'j10' => $request->j10,
                'j11' => $request->j11,
                'j12' => $request->j12,
                'j13' => $request->j13,
                'j14' => $request->j14,
                'j15' => $request->j15,
                'j16' => $request->j16,
                'j17' => $request->j17,
                'j18' => $request->j18,
                'j19' => $request->j19,
                'j20' => $request->j20,
                'j21' => $request->j21,
                'j22' => $request->j22,
                'j23' => $request->j23,
                'j24' => $request->j24,
                'j25' => $request->j25,
                'status' => 'sudah'
            ]);

            return back();
        }
    }


    // ADMIN
    public function lihatjawaban($id)
    {
        $gi = GeneralIdea::where('id', $id)->first();
        $user = User::where('id', $gi->user_id)->first();
        $konsul = Konsul::where('id', $gi->konsul_id)->first();

        return view('admin.lihatjawaban', compact(['gi', 'user', 'konsul']));
    }

    public function inputhasil($id, Request $request)
    {
        $this->validate($request, [
            'hasil' => 'required'
        ]);

        $gi = GeneralIdea::find($id)->update([
            'hasil' => $request->hasil
        ]);

        return back();
    }
}
