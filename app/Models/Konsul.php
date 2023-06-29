<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsul extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kecenderungan',
        'start_test',
        'end_test',
        'bukti_pembayaran',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function generalidea()
    {
        return $this->hasOne(GeneralIdea::class);
    }
}
