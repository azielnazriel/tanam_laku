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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id_user');
            $table->primary('id_user');
            $table->string('nama');
            $table->unique('nama');
            $table->string('email');
            $table->integer('no_tlpn');
            $table->unique('no_tlpn');
            $table->string('password');
            $table->string('alamat');
            $table->unique('alamat');
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
};
