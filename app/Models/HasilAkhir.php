<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilAkhir extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'konsul_id',
        'kondisi_psikologis',
        'diagnosis'
    ];

    public function konsul()
    {
        return $this->belongsTo(Konsul::class);
    }
}
