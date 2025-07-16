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
        Schema::create('laporan', function (Blueprint $table) {
            $table->id('id_laporan');
            $table->unsignedBigInteger('id_kelola');
            $table->date('tanggal_laporan');
            $table->date('periode_dari');
            $table->date('periode_sampai');
            $table->string('total_produk_masuk', 10);
            $table->string('total_produk_keluar', 10);
            $table->text('catatan');
            $table->foreign('id_kelola')->references('id_kelola')->on('produkmasukkeluar')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('laporan');
    }
};
