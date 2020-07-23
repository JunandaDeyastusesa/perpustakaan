<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftarbk extends Model
{
        protected $table = 'buku';
    protected $fillable = [
    	'kode_buku',
    	'judul', 
    	'pengarang',
    	'tahun_terbit',
    	'gambar',
    	'created_at',
    	'updated_at'];
}
