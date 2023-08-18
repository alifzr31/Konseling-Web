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
        'j11',
        'j12',
        'j13',
        'j14',
        'j15',
        'j16',
        'j17',
        'j18',
        'j19',
        'j20',
        'j21',
        'j22',
        'j23',
        'j24',
        'j25',
        'hasil',
        'status'
    ];

    public function konsul()
    {
        return $this->belongsTo(Konsul::class);
    }
}
