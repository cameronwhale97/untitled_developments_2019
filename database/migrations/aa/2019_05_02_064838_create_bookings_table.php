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
                Schema::dropIfExists(‘bookings’);
                Schema::create('bookings', function (Blueprint $table) {
           	        $table->timestamps();
			        $table->string('Client Name');
			        $table->string('Client Email');
			        $table->integer('Client Phone Number');
			        $table->string('Chosen Service');
			        $table->string('Chosen Time');
			        $table->string('Staff Member');
			        
			        

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
