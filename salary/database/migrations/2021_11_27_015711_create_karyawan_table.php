<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_karyawan');
            $table->integer('id_jabatan') -> unsigned(); //Unsigned fungsinya agar angkanya ini mulai dari angka 1. Kalau misalnya id 0 jadi g kebaca gituh
            $table->enum('status', ['tetap', 'kontrak', 'magang']); //Enum = Boolean, tapi kalo enum pilihannya lebih dari 2, yang dipilih lebih dari 1.
            $table->date('tanggal_masuk');
            $table->string('nomor_hp') -> unique();
            $table->string('username') -> unique();
            $table->string('password');
            //Cara relasi:
            $table->foreign('id_jabatan') -> references('id') -> on('jabatan') -> onDelete('cascade');//Ketika table utama dihapus, tabel ini tidak terhapus
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
        Schema::dropIfExists('karyawan');
    }
}
