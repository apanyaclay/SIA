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
        Schema::create('log_mata_pelajarans', function (Blueprint $table) {
            $table->char('Kode_Mapel')->length(5);
            $table->string('Nama_Mapel')->length(50);
            $table->integer('KKM')->length(2);
            $table->bigInteger('Guru_Mapel');
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
        Schema::dropIfExists('log_mata_pelajarans');
    }
};
