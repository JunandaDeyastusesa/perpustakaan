<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $fillable = [
    	'kode_buku',
    	'judul', 
    	'pengarang',
    	'tahun_terbit',
    	'sinop',
        'stok',
        'genre',
    	'gambar',
    	'created_at',
    	'updated_at'];
}

