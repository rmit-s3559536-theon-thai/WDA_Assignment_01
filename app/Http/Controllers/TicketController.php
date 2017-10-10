<?php

namespace App\Http\Controllers;

use App\TicketDetails;
use App\Comment;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\TicketFormRequest;



class TicketController extends Controller
{
    
	public function create() {
        $users = User::all();
        return view('ticket.create', ['users' => $users]);
    }

    public function fetch() {
        $tickets = Tickets::orderBy('created_at', 'DESC')->get();

        return response()->json($tickets);
    }

    public function store(TicketFormRequest $request) {

        $allRequest = $request->all();

        $ticket_details = new TicketDetails();
        $ticket_details->os = $allRequest['os'];
        $ticket_details->issue = $allRequest['issue'];
        $ticket_details->user_id = $allRequest['user_id'];
        $ticket_details->status = 'pending';
        $ticket_details->priority = 'low';
        $ticket_details->escLevel = '1';
        $ticket_details->save();

        $ticketComments = new Comment();
        $ticketComments->comment = $allRequest['comment'];

        $ticketComments->ticket_details_id = $ticket_details->id;
        $ticketComments->save();

        /*
         * Using sessions
         * */
        $request->session()->put('ticketComments', $ticketComments);
        $request->session()->put('ticket', $ticket_details);   


        return redirect()->route('ticketview');
    }



}
