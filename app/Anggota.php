<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $fillable = [
    	'id',
    	'nama', 
    	'jurusan',
    	'kelas',
    	'created_at',
    	'updated_at'];
}
