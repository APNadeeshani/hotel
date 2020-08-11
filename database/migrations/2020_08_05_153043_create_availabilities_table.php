<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvailabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('availabilities', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('hotelid');
            $table->string('roomtype');
            $table->string('roomcount');
            $table->string('startdate');
            $table->string('enddate');
            $table->string('remark');
            $table->string('canceldate');
            $table->string('cancelremark');
            $table->string('sts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('availabilities');
    }
}
