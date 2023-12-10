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
        Schema::create('log_kip_kps_pips', function (Blueprint $table) {
            $table->integer('ID_Status');
            $table->integer('ID_Siswa')->length(10);
            $table->enum('Status_KIP',['ya','tidak']);
            $table->string('No_KIP')->length(30);
            $table->enum('Status_KPS', ['ya','tidak']);
            $table->string('No_KPS')->length(30);
            $table->enum('Status_Eligible_PIP',['ya','tidak']);
            $table->string('Alasan_Eligible_PIP')->length(50);
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
        Schema::dropIfExists('log_kip_kps_pips');
    }
};
