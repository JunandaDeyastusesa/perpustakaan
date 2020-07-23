<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    protected $table = 'pinjam';
    protected $fillable = [
    	'id',
    	'id_anggota', 
    	'kode_buku',
    	'tgl_pinjam',
        'tgl_kembali',
        'status',
        'denda',
    	'created_at',
    	'updated_at'];

    	public function buku() {
	return $this->belongsTo('App\Buku', 'kode_buku');
}

    	public function anggota() {
	return $this->belongsTo('App\User', 'id_anggota');
}
}

