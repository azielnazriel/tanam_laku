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
        Schema::create('tanamen', function (Blueprint $table) {
            $table->bigIncrements('id_tanam');
            $table->string('nama_tanam');
            $table->integer('harga');
            $table->integer('stok');
            $table->text('keterangan');
            $table->string('foto');
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
        Schema::dropIfExists('tanamen');
    }
};
