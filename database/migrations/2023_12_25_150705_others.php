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
        Schema::create('others', function (Blueprint $table) {
            $table->increments('id_other');
            $table->string('nik_other')->unique();
            $table->string('no_hp')->nullable();
            $table->string('no_tps')->nullable();
            $table->longText('alamat_tps')->nullable();
            $table->string('disabilitas')->nullable();
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
