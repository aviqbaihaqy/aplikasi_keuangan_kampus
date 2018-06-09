<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemakaianBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemakaian_barang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('No')->unique();
            $table->dateTime('Tgl_Permintaan');
            $table->dateTime('Tgl_Dipakai');
            $table->char('Nama_yang_minta',100);
            $table->char('Dipakai_oleh_bagian',100);
            $table->integer('Kuantitas');
            $table->string('Barang_yang_diminta');
            $table->integer('Hpp');
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
        Schema::dropIfExists('pemakaian_barang');
    }
}
