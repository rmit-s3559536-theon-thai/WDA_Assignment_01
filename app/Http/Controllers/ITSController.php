<?php

namespace App\Http\Controllers;

use App\TicketDetails;
use App\Comment;
use Illuminate\Http\Request;
use App\User;
use Session;



class ITSController extends Controller {
  
    public function index () {
    	
    	$ticketDetail = TicketDetails::all();
    	return view('its.index', ['ticketDetail' => $ticketDetail]);
    }

  
    public function edit($id) {
        // get the ticket detail
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



    // Function for pulling and posting data within the same route
    public function getTrackTicket () {
        return view('its.trackTicket');
    }

    public function postTrackTicket (Request $request) {
        $ticketID = $request['ticket_id'];

        $ticketDetail = TicketDetails::find($ticketID);
        if ($ticketDetail === null) {
           // Flash  Msg goes in here.
            Session::flash('notValidId', 'The ID does not exist in the database');
            Session::flash('alert-class', 'alert-danger');
        }

        return view('its.trackTicket', ['ticketDetail' => $ticketDetail]);

    }   



}
