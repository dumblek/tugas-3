<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPinjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pinjaman', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('mahasiswa_id');
            $table->unsignedInteger('buku_id');
            $table->datetime('tanggal_peminjaman');
            $table->datetime('tanggal_akhir_peminjaman');
            $table->datetime('tanggal_pengembalian');
            $table->boolean('status_ontime');
            $table->timestamps();

            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa');
            $table->foreign('buku_id')->references('id')->on('buku');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_pinjaman');
    }
}
