<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frs', function (Blueprint $table) {
            $table->bigInteger('id', 20)->unsigned();
            $table->char('npm', 10);
            $table->char('semester', 5);
            $table->char('kode_matkul', 8)->unique();
            $table->string('thn_ajaran', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frs');
    }
}
