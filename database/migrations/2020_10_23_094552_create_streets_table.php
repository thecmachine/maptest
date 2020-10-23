<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStreetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('streets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('miles_per_hour_min'); //for longest arrival estimation regardless of congestion/traffic
            $table->integer('miles_per_hour_max'); //for shortest arrival estimation regardless of congestion/traffic
            $table->integer('city_id'); //many streets could span several cities
            $table->integer('state_id'); //many streets could span several states
            $table->integer('zip_code_id'); //many streets could span several zip codes
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
        Schema::dropIfExists('streets');
    }
}
