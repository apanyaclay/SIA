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
        Schema::create('ekstrakurikulers', function (Blueprint $table) {
            $table->char('Kode_Ekskul')->length(5)->primary();
            $table->string('Nama_Ekskul')->length(30);
            $table->bigInteger('Guru_Ekskul');
            $table->enum('Hari',['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu']);
            $table->time('Waktu_Mulai');
            $table->time('Waktu_Selesai');
            $table->foreign('Guru_Ekskul')->references('NUPTK')->on('guruses')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ekstrakurikulers');
    }
};
