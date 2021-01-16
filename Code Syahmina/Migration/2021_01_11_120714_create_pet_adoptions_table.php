<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetAdoptionsTable extends Migration
{
    public function up()
    {
        Schema::create('pet_adoptions', function (Blueprint $table) {
           //$table->timestamps();
            $table->string('petName');
            $table->string('petType');
            $table->binary('pet_image');
            $table->integer('Age');
            $table->integer('petID')->unsigned()->nullable();
            $table->primary('petID');
           
        });
    }
    /**
     * Run the migrations.
     *
     *   
     * @return void
     */
  

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pet_adoptions');
    }
}
