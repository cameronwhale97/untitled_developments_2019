<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                Schema::dropIfExists('bookings');
                Schema::create('bookings', function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('clientname');
                    $table->string('clientemail');
                    $table->string('clientphone');
                    $table->string('chosenservice');
                    $table->string('staffmember');
                    $table->string('chosendate');
                    $table->string('chosentime');

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
        Schema::dropIfExists('bookings');
    }
}

