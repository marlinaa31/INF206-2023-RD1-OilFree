<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dapatpoint extends Model
{
    use HasFactory;
    /**
     * fillable 
     * 
     * @var array <int, string>
     */
    protected $fillable = [
        'id',
        'email',
        'berat_minyak',
        'tanggal_dapat_point',
        'jumlah_point',
        'jumlah_pulsa',
    ];
}
