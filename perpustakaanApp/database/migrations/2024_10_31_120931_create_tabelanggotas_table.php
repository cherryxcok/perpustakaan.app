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
        Schema::create('tabelanggotas', function (Blueprint $table) {
            $table->id();
            $table->string ('Nama', length: 100);
            $table->string ('Alamat');
            $table->string ('Email', length: 100);
            $table->string ('Nomor Telepon', length: 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabelanggotas');
    }
};
