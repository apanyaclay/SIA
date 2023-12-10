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
        Schema::create('log_nilai_ekskuls', function (Blueprint $table) {
            $table->integer('ID_Nilai_Ekskul');
            $table->string('ID_Ekskul_Siswa')->length(10);
            $table->enum('Nilai',['A','B','C','D','E']);
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
        Schema::dropIfExists('log_nilai_ekskuls');
    }
};
