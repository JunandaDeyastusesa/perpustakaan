<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigint('kode_buku', 20)->unique()->primary('kode_buku');
            $table->varchar('judul', 200);
            $table->varchar('pengarang', 200);
            $table->year(4);
            $table->varchar('sinop', 800);
            $table->int(20);
            $table->varchar('gambar',200);
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
        Schema::dropIfExists('buku');
    }
}
