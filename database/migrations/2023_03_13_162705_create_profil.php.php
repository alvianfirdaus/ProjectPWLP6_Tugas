<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profill', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nama');
            $table->integer('nim');
            $table->integer('absen');
            $table->string('kelas');
            $table->string('prodi');
            $table->string('jurusan');
            $table->string('alamat');
            $table->string('alamat_mlg');
            $table->string('skil');
            $table->string('sosmed');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
