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
        Schema::create('log_absensi_ekskuls', function (Blueprint $table) {
            $table->integer('ID_Absensi');
            $table->string('ID_Ekskul_Siswa')->length(10);
            $table->date('Tanggal');
            $table->integer('Hadir')->length(2);
            $table->integer('Izin')->length(2);
            $table->integer('Alpa')->length(2);
            $table->integer('Sakit')->length(2);
            $table->string('Action')->length(6);
            $table->string('Username')->length(100);
            $table->timestamp('Waktu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    { 
        Schema::dropIfExists('log_absensi_ekskuls');
    }
};
