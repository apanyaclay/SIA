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
        Schema::create('kip_kps_pips', function (Blueprint $table) {
            $table->integer('ID_Status')->primary();
            $table->integer('ID_Siswa')->length(10);
            $table->enum('Status_KIP',['ya','tidak']);
            $table->string('No_KIP')->length(30);
            $table->enum('Status_KPS', ['ya','tidak']);
            $table->string('No_KPS')->length(30);
            $table->enum('Status_Eligible_PIP',['ya','tidak']);
            $table->string('Alasan_Eligible_PIP')->length(50);
            $table->foreign('ID_Siswa')->references('NISN')->on('siswas')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kip_kps_pips');
    }
};
