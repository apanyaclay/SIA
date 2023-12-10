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
        Schema::create('ekskul_siswas', function (Blueprint $table) {
            $table->string('ID_Ekskul_Siswa')->length(10)->primary();
            $table->char('Ekskul_Kode')->length(5);
            $table->integer('Siswa_ID')->length(10);
            $table->bigInteger('Thn_Ajaran');
            $table->foreign('Ekskul_Kode')->references('Kode_Ekskul')->on('ekstrakurikulers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Siswa_ID')->references('NISN')->on('siswas')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('Thn_Ajaran')->references('ID_Thn_Ajaran')->on('tahun_ajarans')->onDelete('restrict')->onUpdate('restrict');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ekskul_siswas');
    }
};
