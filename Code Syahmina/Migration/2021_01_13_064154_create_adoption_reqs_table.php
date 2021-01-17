<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdoptionReqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adoption_reqs', function (Blueprint $table) {

            $table->timestamps();
            $table->integer('adoptID');
            $table->integer('petID')->unsigned()->nullable();
            $table->integer('UserID');
            $table->date('reqDate');
            $table->string('reqStatus');
            $table->foreign('petID')->references('petID')->on('pet_adoptions');
            $table->primary('adoptID');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adoption_reqs');
    }
}
