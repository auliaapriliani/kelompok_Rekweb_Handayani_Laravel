<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemeriksaanIbuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaan_ibu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik');
            $table->string('bb');
            $table->string('tb');
            $table->string('td');
            $table->string('tfu');
            $table->string('lila');
            $table->string('status_gizi');
            $table->string('patella');
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
        Schema::dropIfExists('pemeriksaan_ibu');
    }
}
