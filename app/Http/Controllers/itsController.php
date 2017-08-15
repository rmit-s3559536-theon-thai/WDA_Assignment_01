<?php

namespace App\Http\Controllers;
	
use App\TicketDetails;
use App\Comment;
use Illuminate\Http\Request;
use App\UserInformation;



class itsController extends Controller {
  
    public function index () {
    	
    	$ticketDetail = TicketDetails::all();

    	return view('its.index', ['ticketDetail' => $ticketDetail]);



    }

  
    public function edit($id) {
        // get the nerd
        $ticketDetail = TicketDetails::find($id);



        // show the view and pass the ticket details to it
        return view('its.ticket', ['ticketDetail' => $ticketDetail]);
        
    }

    public function update ($id) {
		return view('its.ticket');
    }

}
