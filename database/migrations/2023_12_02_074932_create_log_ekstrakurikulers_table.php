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
        Schema::create('log_ekstrakurikulers', function (Blueprint $table) {
            $table->char('Kode_Ekskul')->length(5);
            $table->string('Nama_Ekskul')->length(30);
            $table->bigInteger('Guru_Ekskul');
            $table->enum('Hari',['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu']);
            $table->time('Waktu_Mulai');
            $table->time('Waktu_Selesai');
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
        Schema::dropIfExists('log_ekstrakurikulers');
    }
};
