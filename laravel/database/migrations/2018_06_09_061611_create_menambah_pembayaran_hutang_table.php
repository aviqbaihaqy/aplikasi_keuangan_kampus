<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenambahPembayaranHutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menambah_pembayaran_hutang', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('Kode_Unit');
			$table->char('Unit',100);
			$table->char('Tipe_Unit');
			$table->integer('No');
			$table->integer('Kode');
			$table->char('Sub_Unit',100);
			$table->char('Tipe',100);
			
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
        Schema::dropIfExists('menambah_pembayaran_hutang');
    }
}
