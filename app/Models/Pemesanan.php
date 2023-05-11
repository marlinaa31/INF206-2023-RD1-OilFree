<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'user_id',
        'nohp',
        'alamat',
        'berat_minyak',
        'foto_minyak',
        'tanggal',
        'waktu',
        'status',
    ];

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
