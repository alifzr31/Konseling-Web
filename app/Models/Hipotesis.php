<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hipotesis extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'konsul_id',
        'start_test',
        'end_test',
        'hasil_analisis',
        'status'
    ];

    public function konsul()
    {
        return $this->belongsTo(Konsul::class);
    }
}
