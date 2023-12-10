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
        Schema::create('log_prestasis', function (Blueprint $table) {
            $table->string('ID_Prestasi')->length(10);
            $table->integer('Siswa')->length(10);
            $table->enum('Jenis_Prestasi',['Akademik','Non-Akademik']);
            $table->string('Deskripsi')->length(150);
            $table->date('Tanggal');
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
        Schema::dropIfExists('log_prestasis');
    }
};
