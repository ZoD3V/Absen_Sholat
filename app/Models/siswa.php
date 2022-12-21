<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
    ];

    protected $table = 'siswa';

    public function daftarAbsen()
    {
        return $this->belongsTo(daftarAbsen::class);
    }
}
