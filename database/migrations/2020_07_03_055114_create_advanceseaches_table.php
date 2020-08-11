<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvanceseachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advanceseaches', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('hotelid');
            $table->string('pool');
            $table->string('breakfast');
            $table->string('bathroom');
            $table->string('beachfront');
            $table->string('airconditioning');
            $table->string('apartments');
            $table->string('breakfastdinner');
            $table->string('seaview');
            $table->string('bath');
            $table->string('balcony');
            $table->string('spabath');
            $table->string('twinbeds');
            $table->string('Kitchen');
            $table->string('freewiFi');
            $table->string('destinationkm');
            $table->string('hiking');
            $table->string('walking');
            $table->string('bicyclerental');
            $table->string('localculture');
            $table->string('Cookingclz');
            $table->string('withoutcredit');
            $table->string('prepayment');
            $table->string('allmeals');
            $table->string('inclusive');
            $table->string('breakfastlunch');
            $table->string('selfcatering');
            $table->string('airportshuttle');
            $table->string('nonsmoking');
            $table->string('familyrooms');
            $table->string('wellnesscenter');
            $table->string('petsallowed');
            $table->string('electricvehiclecharg');
            $table->string('terrace');
            $table->string('flat-screentv');
            $table->string('Washingmachine');
            $table->string('kettle');
            $table->string('teamaker'); 
            $table->string('fitnesscenter');  
            $table->string('parking'); 
            $table->string('privatepool');   
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
        Schema::dropIfExists('advanceseaches');
    }
}
