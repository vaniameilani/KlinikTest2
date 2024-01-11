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
        Schema::create('ktps', function (Blueprint $table) {
            // $table->id();
            $table->string('nik')->primary()->unique();
            $table->string('nama');
            // $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('provinsi');
            $table->string('kota_kab');
            $table->string('kecamatan');
            $table->string('desa_kel');
            $table->string('rt');
            $table->string('rw');
            $table->longText('alamat');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('status_perkawinan');
            $table->string('kewarganegaraan');
            $table->string('asal_negara');
            $table->binary('scan_ktp')->nullable();
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
