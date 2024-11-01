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
        Schema::create('tabeltransaksipeminjamen', function (Blueprint $table) {
            $table->id();
            $table->string ('ID Anggota', length: 50);
            $table->string ('ID buku', length: 50);
            $table->date ('Tanggal Pinjam');
            $table->date ('Tanggal Pengembalian');
            #anggota yang meminjam, buku yang dipinjam, tanggal pinjam, dan tanggal pengembalian
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabeltransaksipeminjamen');
    }
};
