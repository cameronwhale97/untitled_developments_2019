<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;




use DB;
use App\Http\Controllers\Controller;


class BookingsController extends Controller
{


public function store(Request $request)
    {
        // create a new user object
        $booking           = new \App\BookingsController;

        $booking->clientname     = $request->input('clientname');
        $booking->clientemail    = $request->input('clientemail');
        $booking->clientphone    = $request->input('clientphone');
        $booking->staffmember    = $request->input('staffmember');
        $booking->save();
        // redirect back to the users list
        $msg_success='Successfully added new booking!';
        return redirect('book')->with('status', $msg_success);

    }
    
}