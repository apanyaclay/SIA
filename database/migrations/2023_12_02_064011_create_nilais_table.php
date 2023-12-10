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
        Schema::create('nilais', function (Blueprint $table) {
            $table->integer('Nilai_ID')->primary();
            $table->char('Kode_Mapel')->length(5);
            $table->integer('Siswa_ID')->length(10);
            $table->bigInteger('Thn_Ajaran');
            $table->enum('Jenis',['F1','F2','F3','UTS','UAS']);
            $table->integer('Nilai_Pengetahuan')->length(3);
            $table->integer('Nilai_Keterampilan')->length(3);
            $table->foreign('Kode_Mapel')->references('Kode_Mapel')->on('mata_pelajarans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Siswa_ID')->references('NISN')->on('siswas')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('Thn_Ajaran')->references('ID_Thn_Ajaran')->on('tahun_ajarans')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};
