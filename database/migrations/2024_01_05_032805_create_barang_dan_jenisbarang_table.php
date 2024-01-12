<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barang_dan_jenisbarang', function (Blueprint $table) {
            $table->id('idbarangjenisbarang');
            $table->unsignedBigInteger('kode_barang');
            $table->unsignedBigInteger('id_jenis');
            $table->timestamps();

            $table->foreign('kode_barang')->references('kode_barang')->on('barang');

            $table->foreign('id_jenis')->references('id_jenis')->on('jenisbarang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_dan_jenisbarang');
    }
};
