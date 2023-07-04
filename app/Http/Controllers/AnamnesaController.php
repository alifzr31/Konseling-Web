<?php

namespace App\Http\Controllers;

use App\Models\Anamnesa;
use Illuminate\Http\Request;

class AnamnesaController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'start_test' => 'required',
            'end_test' => 'required'
        ]);

        Anamnesa::create([
            'user_id' => $request->user_id,
            'konsul_id' => $request->konsul_id,
            'start_test' => $request->start_test,
            'end_test' => $request->end_test,
            'status' => 'belum'
        ]);

        return back();
    }

    public function selesai_anamnesa($id, Request $request)
    {
        $this->validate($request, [
            'bukti_chat' => 'required|mimes:jpg,jpeg,png,txt|max:2048'
        ]);

        $bukti_chat = $request->file('bukti_chat');
        $fileName = $bukti_chat->hashName();
        $bukti_chat->storeAs('public/bukti_chat', $fileName);
        
        Anamnesa::where('id', $id)->update([
            'bukti_chat' => $fileName,
            'status' => 'sudah',
        ]);

        return back();
    }
}
