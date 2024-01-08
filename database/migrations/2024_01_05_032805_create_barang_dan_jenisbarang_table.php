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
            $table->string('idbarangjenisbarang')->primary();
            $table->string('kode_barang');
            $table->string('id_jenis');
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
