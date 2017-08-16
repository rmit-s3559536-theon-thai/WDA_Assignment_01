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

  

    public function update(Request $request, $id) {
        $this->validate($request, [
            'comment' => 'required',
            'status' => 'required',
        ]);
        


        TicketDetails::find($id)->update($request->all());

        $ticketComments = new Comment();
        $ticketComments->comment = $request['comment'];
        $ticketComments->ticket_details_id = $id;
        $ticketComments->save();


        return redirect()->route('its.index') ->with('success','Ticket status updated successfully');
    }

}
