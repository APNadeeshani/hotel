<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->string('countroom');
            $table->string('bedtype');
            $table->string('roomsize');
            $table->string('hotelid');
            $table->string('type');
            $table->string('description');
            $table->string('img');
            $table->string('avlble');
            $table->string('sts');
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
        Schema::dropIfExists('rooms');
    }
}
