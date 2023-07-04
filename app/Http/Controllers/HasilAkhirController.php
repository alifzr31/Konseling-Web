<?php

namespace App\Http\Controllers;

use App\Models\HasilAkhir;
use App\Models\Konsul;
use Illuminate\Http\Request;

class HasilAkhirController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'kondisi_psikologis' => 'required',
            'diagnosis' => 'required',
        ]);

        HasilAkhir::create([
            'user_id' => $request->user_id,
            'konsul_id' => $request->konsul_id,
            'kondisi_psikologis' => $request->kondisi_psikologis,
            'diagnosis' => $request->diagnosis
        ]);

        $now = date('Y-m-d H:i:s');

        Konsul::where('id', $request->konsul_id)->update([
            'end_test' => $now,
            'status' => 'selesai',
        ]);

        return back();
    }
}
