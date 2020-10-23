<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //future proofing user defined location names
            $table->integer('address');
            $table->integer('street_id');
            $table->integer('city_id');
            $table->integer('state_id');
            $table->integer('zip_code_id');
            $table->integer('latitude_id'); //future proofing distance/cost/time estimates
            $table->integer('longitude_id'); //future proofing distance/cost/time estimates
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
        Schema::dropIfExists('locations');
    }
}
