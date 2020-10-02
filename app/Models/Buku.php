<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $fillable = ['judul', 'pengarang', 'tahun_terbit'];

    public function mahaasiswa()
    {
        return $this->belongsToMany('App\Models\Mahasiswa', 'data_pinjaman');
    }
}
