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
        Schema::create('bpjs', function (Blueprint $table) {
            $table->increments('id_bpjs');
            $table->string('nik_bpjs')->unique();
            $table->string('no_bpjs')->nullable();
            $table->string('jenis_bpjs')->nullable();
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
