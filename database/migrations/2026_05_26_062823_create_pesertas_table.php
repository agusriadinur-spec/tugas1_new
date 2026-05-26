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
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('umur');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('no_hp');
            $table->string('email')->unique();
            $table->string('kategori');
            $table->enum('status', ['Pending', 'Lolos', 'Gagal'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesertas');
    }
};