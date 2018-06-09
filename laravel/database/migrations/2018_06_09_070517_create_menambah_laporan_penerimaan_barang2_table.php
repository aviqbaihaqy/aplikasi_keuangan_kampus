<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenambahLaporanPenerimaanBarang2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menambah_laporan_penerimaan_barang2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_barang');
            $table->char('spesifikasi');
            $table->integer('qty_dipesan');
            $table->integer('qty_diterima');
            $table->integer('jumlah_harga');
            $table->char('keterangan');
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
        Schema::dropIfExists('menambah_laporan_penerimaan_barang2');
    }
}
