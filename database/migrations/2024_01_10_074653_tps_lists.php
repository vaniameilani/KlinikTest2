<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tps_lists', function (Blueprint $table){
            $table->id();
            $table->string('no_tps');
            $table->longText('alamat_tps');
            $table->timestamps();
        });

        DB::table('tps_lists')
            ->insert(array(
                array('no_tps' => '001', 'alamat_tps' => 'AULA KANTOR DESA RT.001 DUSUN BANTAN'),
                array('no_tps' => '002', 'alamat_tps' => 'PENDOPO TK TUNAS HARAPAN RT.003 DUSUN BANTAN'),
            ));
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
