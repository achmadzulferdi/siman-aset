<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('aset_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('kode_brg');
            $table->string('nama_brg');
            $table->string('jenis_brg');
            $table->string('merk_brg');
            $table->string('type_brg');
            $table->string('tahun');
            $table->string('harga');
            $table->string('kondisi');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aset_tabel');
    }
};
