<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nama', 'nim', 'fakultas', 'jurusan', 'no_hp', 'no_wa', 'user_id']; 
    

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function buku()
    {
        return $this->belongsToMany('App\Models\Buku', 'data_pinjaman');
    }
}
