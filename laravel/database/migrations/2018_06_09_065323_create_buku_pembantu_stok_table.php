<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukuPembantuStokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku_pembantu_stok', function (Blueprint $table) {
            $table->bigIncrements('kode');
            $table->string('nama');
			$table->string('bagian');
			$table->bigInteger('hpp');
			$table->integer('stok');
			
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
        Schema::dropIfExists('buku_pembantu_stok');
    }
}
