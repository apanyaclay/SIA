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
        Schema::create('absensi_kelas', function (Blueprint $table) {
            $table->integer('ID_Absensi')->primary();
            $table->integer('Siswa_ID')->length(10);
            $table->string('Kelas')->length(10);
            $table->date('Tanggal');
            $table->integer('Hadir')->length(2);
            $table->integer('Izin')->length(2);
            $table->integer('Alpa')->length(2);
            $table->integer('Sakit')->length(2);
            $table->foreign('Siswa_ID')->references('NISN')->on('siswas')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('Kelas')->references('ID_Kelas')->on('kelas')->onDelete('restrict')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi_kelas');
    }
};
