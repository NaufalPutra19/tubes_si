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
        Schema::create('produkmasukkeluar', function (Blueprint $table) {
            $table->id('id_kelola');
            $table->unsignedBigInteger('id_produk');
            $table->string('nama_produk', 20);
            $table->string('jenis_produk', 10);
            $table->string('produk_masuk', 10);
            $table->date('tanggal_produk_masuk');
            $table->string('produk_keluar', 10); 
            $table->date('tanggal_produk_keluar');
            $table->string('total_produk_masuk_keluar', 10);
            $table->foreign('id_produk')->references('id_produk')->on('produk')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('produkmasukkeluar');
    }
};
