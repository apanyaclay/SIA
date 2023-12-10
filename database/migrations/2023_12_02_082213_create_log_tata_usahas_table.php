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
        Schema::create('log_tata_usahas', function (Blueprint $table) {
            $table->bigInteger('ID_Pegawai')->length(20);
            $table->string('Nama_Pegawai')->length(150);
            $table->enum('Jenis_Kelamin', ['L', 'P']);
            $table->date('TMT_Kerja');
            $table->string('Tempat_Lahir')->length(100);
            $table->date('Tanggal_Lahir');
            $table->string('Jenjang_Pendidikan')->length(100);
            $table->enum('Status',['Aktif','Resign','Diberhentikan','Cuti']);
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
        Schema::dropIfExists('log_tata_usahas');
    }
};
