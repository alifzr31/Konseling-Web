<?php

namespace App\Http\Controllers;

use App\Models\HasilAkhir;
use App\Models\Konsul;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HasilAkhirController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'kondisi_psikologis' => 'required',
            'diagnosis' => 'required',
            'ppdgj' => 'required',
        ]);

        HasilAkhir::create([
            'user_id' => $request->user_id,
            'konsul_id' => $request->konsul_id,
            'kondisi_psikologis' => $request->kondisi_psikologis,
            'diagnosis' => $request->diagnosis,
            'ppdgj' => $request->ppdgj
        ]);

        $now = date('Y-m-d H:i:s');

        Konsul::where('id', $request->konsul_id)->update([
            'end_test' => $now,
            'status' => 'selesai',
        ]);

        return back();
    }

    public function showHasilAkhir($konsul_id)
    {
        $hasilAkhir = HasilAkhir::where('konsul_id', $konsul_id)->with('konsul')->first();

        return view('hasilakhir', compact('hasilAkhir'));
    }

    public function cetak_pdf(Request $request)
    {
        if ($request->konsul_id) {
            $hasilAkhir = HasilAkhir::where('konsul_id', $request->konsul_id)->first();
            $tgl_lahir = date_create(Auth::user()->tgl_lahir);
            $thn_lahir = date_format($tgl_lahir, 'Y');
            $thn_sekarang = date('Y');
            $umur = $thn_sekarang - $thn_lahir;
            $pdf = PDF::loadview('laporan_konsul_pdf', compact(['hasilAkhir', 'umur']))->setPaper('A4', 'potrait');
    
            return $pdf->stream();
        }
    }
}
