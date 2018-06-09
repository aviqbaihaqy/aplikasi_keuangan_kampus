<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderPembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_pembelian', function (Blueprint $table) {
            $table->increments('id');
			$table->date('tanggal');
			$table->string('bagian');
			$table->string('supplier');
			$table->date('diperlukan');
			$table->date('harus_dikirim');
			$table->string('cara_bayar');
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
        Schema::dropIfExists('order_pembelian');
    }
}
