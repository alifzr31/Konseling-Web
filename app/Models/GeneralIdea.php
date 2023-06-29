<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralIdea extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'konsul_id',
        'start_test',
        'end_test',
        'j1',
        'j2',
        'j3',
        'j4',
        'j5',
        'j6',
        'j7',
        'j8',
        'j9',
        'j10',
        'hasil',
        'status'
    ];

    public function konsul()
    {
        return $this->belongsTo(Konsul::class);
    }
}
