<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMencetakLaporanDaftarHutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mencetak_laporan_daftar_hutang', function (Blueprint $table) {
            $table->increments('no');
            $table->string('nama_suplier', 100);
			$table->integer('total_transaksi');
			$table->integer('sudah_dibayar');
			$table->integer('sisa_hutang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mencetak_laporan_daftar_hutang');
    }
}
