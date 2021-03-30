<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyMatakuliahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matakuliah', function (Blueprint $table) {
            $table->foreign('kode_matkul')
                  ->references('kode_matkul')
                  ->on('frs')
                  ->onUpdate('cascade');
        });

        Schema::table('matakuliah', function (Blueprint $table) {
            $table->foreign('kode_prodi')
                  ->references('kode_prodi')
                  ->on('prodi')
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
        Schema::table('matakuliah', function (Blueprint $table) {
            //
        });
    }
}
