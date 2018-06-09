<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenambahLaporanPenerimaanBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menambah_laporan_penerimaan_barang', function (Blueprint $table) {
            $table->increments('no');
            $table->datetime('tanggal');
            $table->string('nomor');
            $table->string('suplier');
            $table->string('bagian');
            $table->integer('total'); 
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
        Schema::dropIfExists('menambah_laporan_penerimaan_barang');
    }
}
