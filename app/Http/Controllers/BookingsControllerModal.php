<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\User;


use Alert;
use Illuminate\Support\Facades\Redirect;


use DB;
use App\Http\Controllers\Controller;

class BookingsControllerModal extends Controller
{
    public function store(Request $request)
    {
        // create a new user object
       $booking           = new \App\BookingsController;

        $booking->clientname     = $request->input('clientname');
        $booking->clientemail    = $request->input('clientemail');
        $booking->clientphone    = $request->input('clientphone');
        
        $booking->chosenservice  = $request->input('chosenservice');
        $booking->staffmember    = $request->input('staffmember');
        
        $booking->chosendate     = $request->input('chosendate');
        $booking->chosentime     = $request->input('chosentime');
        

        $booking->save();
        // redirect back to the users list
        
        
        //return redirect('book')->with('success', 'Booking Successful\nCheck your email for more');
            
        $msg_success='Successfully added new booking!';
        return Redirect::back()->with('alert', $msg_success);

    }
}
