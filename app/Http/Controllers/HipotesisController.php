<?php

namespace App\Http\Controllers;

use App\Models\Hipotesis;
use Illuminate\Http\Request;

class HipotesisController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'hasil_analisis' => 'required',
        ]);

        $now = date('Y-m-d H:i:s');

        Hipotesis::create([
            'user_id' => $request->user_id,
            'start_test' => $now,
            'end_test' => $now,
            'konsul_id' => $request->konsul_id,
            'hasil_analisis' => $request->hasil_analisis,
            'status' => 'sudah'
        ]);

        return back();
    }
}
