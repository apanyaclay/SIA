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
        Schema::create('log_ekskul_siswas', function (Blueprint $table) {
            $table->string('ID_Ekskul_Siswa')->length(10);
            $table->char('Ekskul_Kode')->length(5);
            $table->integer('Siswa_ID')->length(10);
            $table->bigInteger('Thn_Ajaran');
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
        Schema::dropIfExists('log_ekskul_siswas');
    }
};
