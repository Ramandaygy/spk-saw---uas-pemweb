<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tb_alternatif', function (Blueprint $table) {
            //$table->string('id_alternatif',16)->primary();
            //$table->string('nama_alternatif',255);
            //$table->timestamps();
            $table->increments('id_alternatif');
            $table->string('nama_alternatif');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('tb_alternatif');
    }
};
