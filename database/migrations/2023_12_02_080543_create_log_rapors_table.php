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
        Schema::create('log_rapors', function (Blueprint $table) {
            $table->integer('ID_Rapor');
            $table->integer('ID_Nilai');
            $table->integer('ID_Ekskul_Nilai');
            $table->string('Prestasi_ID')->length(10);
            $table->integer('Absensi_ID');
            $table->integer('Absensi_Ekskul');
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
        Schema::dropIfExists('log_rapors');
    }
};
