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
        Schema::create('log_nilais', function (Blueprint $table) {
            $table->integer('Nilai_ID');
            $table->char('Kode_Mapel')->length(5);
            $table->integer('Siswa_ID')->length(10);
            $table->bigInteger('Thn_Ajaran');
            $table->enum('Jenis',['F1','F2','F3','UTS','UAS']);
            $table->integer('Nilai_Pengetahuan')->length(3);
            $table->integer('Nilai_Keterampilan')->length(3);
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
        Schema::dropIfExists('log_nilais');
    }
};
