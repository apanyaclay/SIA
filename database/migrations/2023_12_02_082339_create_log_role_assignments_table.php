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
        Schema::create('log_role_assignments', function (Blueprint $table) {
            $table->integer('ID_Role_Assignment');
            $table->bigInteger('Role_ID')->length(20);
            $table->integer('Siswa_ID')->length(10);
            $table->bigInteger('NUPTK_Guru');
            $table->bigInteger('Pegawai_ID')->length(20);
            $table->bigInteger('Kepsek_ID')->length(20);
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
        Schema::dropIfExists('log_role_assignments');
    }
};
