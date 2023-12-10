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
        Schema::create('nilai_ekskuls', function (Blueprint $table) {
            $table->integer('ID_Nilai_Ekskul')->primary();
            $table->string('ID_Ekskul_Siswa')->length(10);
            $table->enum('Nilai',['A','B','C','D','E']);
            $table->foreign('ID_Ekskul_Siswa')->references('ID_Ekskul_Siswa')->on('ekskul_siswas')->onDelete('restrict')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_ekskuls');
    }
};
