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
        Schema::create('log_siswas', function (Blueprint $table) {
            $table->integer('NISN')->length(10);
            $table->integer('NIPD')->length(3);
            $table->string('Nama_Siswa')->length(150);
            $table->enum('Jenis_Kelamin', ['L','P']);
            $table->string('Tempat_Lahir')->length(100);
            $table->date('Tanggal_Lahir');
            $table->enum('Agama', ['Kristen', 'Katholik', 'Hindu', 'Buddha','Konghucu']);
            $table->string('Alamat')->length(255);
            $table->string('No_hp')->length(13);
            $table->enum('Status_dlm_Klrg', ['Anak Kandung','Anak Tiri']);
            $table->string('Nama_Ayah')->length(150);
            $table->string('Nama_Ibu')->length(150);
            $table->string('Pekerjaan_Ayah')->length(50);
            $table->string('Pekerjaan_Ibu')->length(50);
            $table->string('No_Rek_Bank')->length(50);
            $table->string('Bank_Atas_Nama')->length(50);
            $table->enum('Status_Siswa', ['Aktif', 'Lulus', 'Pindah','Dropout','Tidak Aktif']);
            $table->string('Sekolah_Asal')->length(100);
            $table->integer('Anak_Ke')->length(2);
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
        Schema::dropIfExists('log_siswas');
    }
};
