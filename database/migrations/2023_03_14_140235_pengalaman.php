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
        Schema::create('pengalaman', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_kejuaraan');
            $table->string('tanggal');
            $table->string('deskripsi');
            $table->string('subtotal');
            $table->text('cerita');
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
