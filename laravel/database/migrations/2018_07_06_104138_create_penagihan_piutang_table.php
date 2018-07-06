<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenagihanPiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penagihan_piutang', function (Blueprint $table) {
            $table->increments('id_penagihan_piutang');
            $table->date('tgl_penagihan_piutang');
            $table->string('no_tagihan_piutang', 50);
            $table->string('ditagih_kpd', 50);
            $table->string('keterangan', 50);
            $table->integer('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penagihan_piutang');
    }
}
