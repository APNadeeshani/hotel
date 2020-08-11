<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('destination');
            $table->string('customer');
            $table->string('img');
            $table->string('star');
            $table->string('phone');
            $table->string('email');
            $table->string('type');
            $table->string('address');
            $table->string('status'); 
            $table->string('imge1');
            $table->string('imge2');
            $table->string('imge3');
            $table->string('imge4');
            $table->string('imge5');
            $table->string('imge6'); 
            $table->string('dayout');
            $table->string('ownermobile');
            $table->string('seconname');

            $table->string('seconmobile');
            $table->string('seconemail');
            $table->string('seconDesignation');
      
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
        Schema::dropIfExists('hotels');
    }
}
