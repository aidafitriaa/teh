<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stoks', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->unsignedbigInteger('id_transaksi');
            // $table->foreign('id_transaksi')->references('id')->on('transaksis')->onDelete('cascade');
            $table->unsignedbigInteger('id_teh');
            $table->foreign('id_teh')->references('id')->on('tehs')->onDelete('cascade');
            $table->string('jumlah_barang');
            $table->string('barang_masuk');
            $table->string('barang_keluar');
            $table->string('sisa_barang');
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
        Schema::dropIfExists('stoks');
    }
}
