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
        Schema::create('events', function (Blueprint $table){
            $table->increments('id_acara');
            // $table->string('nik_acara')->unique();
            $table->string('nama_acara')->nullable();
            $table->date('tgl_acara')->nullable();
            $table->longText('lokasi_acara')->nullable();
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
