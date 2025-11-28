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
        Schema::create('kategori', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama
            $table->string('position'); // Posisi
            $table->string('office'); // Kantor
            $table->integer('age'); // Usia
            $table->date('start_date'); // Tanggal Mulai
            $table->decimal('salary', 10, 2); // Gaji (Menggunakan decimal untuk mata uang)
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori');
    }
};