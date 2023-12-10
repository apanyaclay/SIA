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
        Schema::create('role_assignments', function (Blueprint $table) {
            $table->integer('ID_Role_Assignment')->primary();
            $table->bigInteger('Role_ID')->length(20);
            $table->integer('Siswa_ID')->length(10);
            $table->bigInteger('NUPTK_Guru');
            $table->bigInteger('Pegawai_ID')->length(20);
            $table->bigInteger('Kepsek_ID')->length(20);
            $table->foreign('Role_ID')->references('ID_Roles')->on('roles')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('Siswa_ID')->references('NISN')->on('siswas')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('NUPTK_Guru')->references('NUPTK')->on('guruses')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('Pegawai_ID')->references('ID_Pegawai')->on('tata_usahas')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('Kepsek_ID')->references('ID_Kepsek')->on('kepala_sekolahs')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_assignments');
    }
};
