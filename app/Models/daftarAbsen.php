<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftarAbsen extends Model
{
    use HasFactory;
    protected $fillable = [
        'absen_id',
        'siswa_id',
        'jam'
    ];
    protected $table = 'daftar_absen';


    public function siswa()
    {
        return $this->belongsTo(siswa::class);
    }
}
