<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggajianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggajian', function (Blueprint $table) {
            $table->increments('id'); // Big itu 16 bit, increment 7 bit. Kalau pakai Big direlasikan, dia g akan mau
            $table->integer('id_karyawan') -> unsigned();
            $table->string('id_tunjangan');
            $table->date('tanggal_gajian'); //Periode
            $table->string('bulan_gajian'); //Waktu
            $table->string('tahun_gajian');
            $table->string('potongan');
            $table->string('total_gajian');
            $table->string('total_tunjangan');
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
        Schema::dropIfExists('penggajian');
    }
}
