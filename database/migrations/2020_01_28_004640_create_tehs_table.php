<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTehsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tehs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('id_kategori');
            $table->foreign('id_kategori')->references('id')->on('kategoris')->onDelete('cascade');
            $table->string('nama_teh');
            $table->string('nutrisi_teh');
            $table->string('harga_teh');
            $table->string('gambar');
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
        Schema::dropIfExists('tehs');
    }
}
