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
        Schema::create('lcs', function (Blueprint $table) {
            $table->increments('id_lc');
            $table->string('nik_lc')->unique();
            $table->string('no_kartu')->nullable();
            $table->string('jenis_kartu')->nullable();
            $table->date('tanggal_pembuatan')->nullable();
            $table->string('sumber_data')->nullable();
            $table->string('nama_koor')->nullable();
            $table->string('telp_koor')->nullable();
            $table->binary('scan_lc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
