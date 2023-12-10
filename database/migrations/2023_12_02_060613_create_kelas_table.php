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
        Schema::create('kelas', function (Blueprint $table) {
            $table->string('ID_Kelas')->length(10)->primary();
            $table->bigInteger('Wali_Kelas');
            $table->string('Nama_Kelas')->length(150);
            $table->enum('Tingkatan',['7','8','9']);
            $table->enum('Kelompok_Kelas',['A','B','C','D','E']);
            $table->foreign('Wali_Kelas')->references('NUPTK')->on('guruses')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
