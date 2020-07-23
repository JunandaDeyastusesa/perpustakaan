<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePinjam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjam', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigint('id_anggota', 20);
            $table->bigint('kode_buku', 20);
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinjam');
    }
}
