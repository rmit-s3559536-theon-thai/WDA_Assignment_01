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
            'user_id' => 'required',
            'os' => 'required',
            'issue' => 'required',
            'comment' => 'required',
        ]);

        $allRequest = $request->all();

        $ticket_details = new TicketDetails();
        $ticket_details->os = $allRequest['os'];
        $ticket_details->issue = $allRequest['issue'];
        $ticket_details->user_id = $allRequest['user_id'];
        $ticket_details->save();

        $ticketComments = new Comment();
        $ticketComments->comment = $allRequest['comment'];
        $ticketComments->ticket_id = $ticket_details->id;
        $ticketComments->save();

        /*
         * Using sessions
         * */
        $request->session()->put('ticketComments', $ticketComments);
        $request->session()->put('ticket', $ticket_details);   


        return redirect()->route('ticketview');
    }

}
