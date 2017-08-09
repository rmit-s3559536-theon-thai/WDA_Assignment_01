<?php

namespace App\Http\Controllers;

use App\TicketDetails;
use App\Comment;
use Illuminate\Http\Request;
use App\UserInformation;




class TicketController extends Controller
{
    
	public function create() {
        $users = UserInformation::all();
        return view('ticket.create', ['users' => $users]);
    }


    public function store(Request $request) {
        $this->validate($request, [
            'os' => 'required',
            'issue' => 'required',
            'comment' => 'required',
        ]);

        $allRequest = $request->all();
        $ticket_details = new TicketDetails();
        $ticket_details->name = $allRequest['name'];
        $ticket_details->email = $allRequest['email'];
        $ticket_details->car_id = $allRequest['item_id'];
        $ticket_details->save();

        $ticketComments = new Comment();
        $ticketComments->address_line_1 = $allRequest['address_line_1'];
        $ticketComments->address_line_2 = $allRequest['address_line_2'];
        $ticketComments->suburb = $allRequest['suburb'];
        $ticketComments->state = $allRequest['state'];
        $ticketComments->country = $allRequest['country'];
        $ticketComments->booking_id = $ticket_details->id;
        $ticketComments->save();

        /*
         * Using sessions
         * */
        $request->session()->put('ticketComments', $ticketComments);
        $request->session()->put('name', $ticket_details->name);

        return redirect()->route('view');
    }

}
