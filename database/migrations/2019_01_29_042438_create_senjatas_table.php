<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSenjatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senjatas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('anggota_id');
            $table->string('type');
            $table->string('nosenjata');

            $table->foreign('anggota_id')->references('id')->on('anggotas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('senjatas');
    }
}
