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
        Schema::create('absensi_ekskuls', function (Blueprint $table) {
            $table->integer('ID_Absensi')->primary();
            $table->string('ID_Ekskul_Siswa')->length(10);
            $table->date('Tanggal');
            $table->integer('Hadir')->length(2);
            $table->integer('Izin')->length(2);
            $table->integer('Alpa')->length(2);
            $table->integer('Sakit')->length(2);
            $table->foreign('ID_Ekskul_Siswa')->references('ID_Ekskul_Siswa')->on('ekskul_siswas')->onDelete('restrict')->onUpdate('restrict');


    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi_ekskuls');
    }
};
