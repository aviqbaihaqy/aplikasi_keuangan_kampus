<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMencetakLaporanTransaksiAppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mencetak_laporan_transaksi_app', function (Blueprint $table) {
            $table->increments('no');
			$table->integer('no_app');
			$table->integer('kode_rekening');
			$table->string('dibayar_kepada', 100);
			$table->string('nama_rekening', 100);
			$table->string('keterangan', 100);
			$table->string('uraian', 100);
			$table->integer('total_rp');
			$table->integer('sub_total');
			$table->integer('kode_jurnal');
			$table->integer('kode_rek');
			$table->string('nama_rek', 100);
			
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
        Schema::dropIfExists('mencetak_laporan_transaksi_app');
    }
}
