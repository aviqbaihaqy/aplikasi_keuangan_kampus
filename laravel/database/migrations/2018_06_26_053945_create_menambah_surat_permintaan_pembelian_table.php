<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenambahSuratPermintaanPembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menambah_surat_permintaan_pembelian', function (Blueprint $table) {
            $table->increments('id');
            $table->string('No_spp')->unique();
            $table->dateTime('tgl_permintaan');
            $table->dateTime('tgl_diperlukan');
            $table->char('nama_yang_meminta',100);
            $table->char('bebankan_ke_bagian',100);
            $table->char('sifat_permintaan',100);
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
        Schema::dropIfExists('menambah_surat_permintaan_pembelian');
    }
}
