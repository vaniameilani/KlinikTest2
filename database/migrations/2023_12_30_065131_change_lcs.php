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
        Schema::create('change_lcs', function (Blueprint $table){
            $table->id();
            // $table->string('nik_change');
            $table->string('no_kartu')->nullable();
            $table->string('jenis_kartu')->nullable();
            $table->date('tanggal_upgrade')->nullable();
            $table->string('alasan_upgrade')->nullable();
            $table->string('status')->nullable();
            $table->date('tanggal_penarikan')->nullable();
            $table->string('alasan_penarikan')->nullable();
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
