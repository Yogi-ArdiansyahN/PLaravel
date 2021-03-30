<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jadwal', function (Blueprint $table) {
            $table->foreign('kode_matkul')
                  ->references('kode_matkul')
                  ->on('matakuliah')
                  ->onUpdate('cascade');
        });
        Schema::table('jadwal', function (Blueprint $table) {
            $table->foreign('nidn')
                  ->references('nidn')
                  ->on('dosen')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jadwal', function (Blueprint $table) {
            //
        });
    }
}
