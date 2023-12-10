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
        Schema::create('wali_siswas', function (Blueprint $table) {
            $table->integer('ID_Wali')->primary();
            $table->string('Nama_Wali')->length(150);
            $table->integer('ID_Siswa')->length(10);
            $table->string('Pekerjaan_Wali')->length(50);
            $table->string('No_Rek_Bank')->length(50);
            $table->string('Bank_Atas_Nama')->length(50);
            $table->foreign('ID_Siswa')->references('NISN')->on('siswas')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wali_siswas');
    }
};
