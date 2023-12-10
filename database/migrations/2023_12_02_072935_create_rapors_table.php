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
        Schema::create('rapors', function (Blueprint $table) {
            $table->integer('ID_Rapor')->primary();
            $table->integer('ID_Nilai');
            $table->integer('ID_Ekskul_Nilai');
            $table->string('Prestasi_ID')->length(10);
            $table->integer('Absensi_ID');
            $table->integer('Absensi_Ekskul');
            $table->foreign('ID_Nilai')->references('Nilai_ID')->on('nilais')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('ID_Ekskul_Nilai')->references('ID_Nilai_Ekskul')->on('nilai_ekskuls')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('Prestasi_ID')->references('ID_Prestasi')->on('prestasis')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('Absensi_ID')->references('ID_Absensi')->on('absensi_kelas')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('Absensi_Ekskul')->references('ID_Absensi')->on('absensi_ekskuls')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rapors');
    }
};
