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
        Schema::create('daftars', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('pendidikan');
            $table->string('email');
            $table->string('no_hp');
            $table->string('nick_name');
            $table->string('ID_game');

            $table->unsignedBigInteger('id_loker');
            $table->foreign('id_loker')->references('id')->on('lokers')->onDelete('cascade');
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
        Schema::dropIfExists('daftars');
    }
};
