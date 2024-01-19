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
        Schema::create('kks', function (Blueprint $table) {
            $table->increments('id_kk');
            $table->string('nik_kk')->unique();
            // $table->foreign('nkk')->refeik_rences('nik')->on('ktps');
            $table->string('kk')->nullable();
            $table->string('dokumen_kk')->nullable();
            $table->string('nama')->nullable();
            $table->string('status')->nullable();
            $table->binary('scan_kk')->nullable();
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
