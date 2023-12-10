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
        Schema::create('jadwal_mapels', function (Blueprint $table) {
            $table->string('ID_Jadwal')->length(10)->primary();
            $table->string('Kelas_ID')->length(10);
            $table->char('Kode_Mapel')->length(5);
            $table->bigInteger('Thn_Ajaran_ID');
            $table->time('Waktu_Mulai');
            $table->time('Waktu_Selesai');
            $table->enum('Hari',['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu']);
            $table->foreign('Kelas_ID')->references('ID_Kelas')->on('kelas')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('Kode_Mapel')->references('Kode_Mapel')->on('mata_pelajarans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Thn_Ajaran_ID')->references('ID_Thn_Ajaran')->on('tahun_ajarans')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_mapels');
    }
};
