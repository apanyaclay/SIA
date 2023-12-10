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
        Schema::create('mata_pelajarans', function (Blueprint $table) {
            $table->char('Kode_Mapel')->length(5)->primary();
            $table->string('Nama_Mapel')->length(50);
            $table->integer('KKM')->length(2);
            $table->bigInteger('Guru_Mapel');
            $table->foreign('Guru_Mapel')->references('NUPTK')->on('guruses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mata_pelajarans');
    }
};
