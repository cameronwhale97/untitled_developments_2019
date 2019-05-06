<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingsController extends Model
{
        protected $table = 'bookings';
        
        
            protected $fillable = ['clientname','clientphone','clientemail'];



}
