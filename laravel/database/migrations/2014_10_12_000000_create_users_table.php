<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
<<<<<<< HEAD
            $table->increments('kode_pelanggan'10);
            $table->string('nama_pelanggan',200);
            $table->string('alamat_cabang'50);
            $table->string('no_telepon'11);
			$table->string('no_fax'11);
			$table->string('tipe_pelanggan'15);
			$table->string('kontak');
			$table->string('telepon_kontak');
=======
            $table->increments('id');
            $table->string('name');
            $table->string('email', 80)->unique();
            $table->string('password');
>>>>>>> e0c37e699f92790e3f55ea5f7078828344a78d91
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
