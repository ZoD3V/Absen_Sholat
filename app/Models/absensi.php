<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensi extends Model
{
    use HasFactory;
    protected $fillable = [
        'sholat_id',
        'name',
        'waktu_absen'
    ];

    protected $table = 'absen';

    public function sholat(){
        return $this->belongsTo(sholat::class);
    }
}
