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
        Schema::create('tahun_ajarans', function (Blueprint $table) {
            $table->bigInteger('ID_Thn_Ajaran')->primary();
            $table->char('Thn_Ajaran')->length(9);
            $table->enum('Semester',['Ganjil','Genap']);
            $table->date('Tanggal_Mulai');
            $table->date('Tanggal_Selesai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tahun_ajarans');
    }
};
