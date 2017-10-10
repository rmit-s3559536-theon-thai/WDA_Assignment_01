<?php

namespace App\Http\Controllers;

use App\TicketDetails;
use App\User;
use App\Comment;

use Illuminate\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class TicketAPIController extends Controller
{

    // List all the tickets stored in MySQL as a neat JSON format.
    public function index(TicketDetails $ticket)
    {
        $tickets = $ticket->with('comments')->get();

        if (!$tickets) {
            throw new HttpException(400, "Invalid data");
        }

        return response()->json(
            $tickets,
            200
        );
    }

    // Display selected ticket itself as a JSON format.
    public function show($id)
    {
        if (!$id) {
            throw new HttpException(400, "Invalid id");
        }

        $ticket = TicketDetails::find($id);

        return response()->json([
            $ticket,
        ], 200);

    }

    // Create a new ticket
    public function store(Request $request)
    {
        $allRequest = $request->all();

        $ticket_details = new TicketDetails();
        $ticket_details->os = $allRequest['os'];
        $ticket_details->issue = $allRequest['issue'];
        $ticket_details->status = $allRequest['status'];
        $ticket_details->priority = $allRequest['priority'];
        $ticket_details->escLevel = $allRequest['escLevel'];
        $ticket_details->user_id = $allRequest['user_id'];
        $ticket_details->save();


        $ticketComments = new Comment();
        $ticketComments->comment = $allRequest['comment'];

        $ticketComments->ticket_details_id = $ticket_details->id;
        $ticketComments->save();
        if ($ticket_details->save()) {
            return $ticket_details;
        }

        throw new HttpException(400, "Invalid data");
    }

    /*
     * Below 3 functions work for updating specific feature
     * Escalation Level, Priority, and Status respectively(PUT).
     */
    public function updateEscLevel(Request $request, $id)
    {
        if (!$id) {
            throw new HttpException(400, "Invalid id");
        }

        $ticket = TicketDetails::find($id);
        $ticket->escLevel = $request['escLevel'];

        if ($ticket->save()) {
            return $ticket;
        }

        throw new HttpException(400, "Invalid data");
    }


    public function updatePriority(Request $request, $id)
    {
        if (!$id) {
            throw new HttpException(400, "Invalid id");
        }

        $ticket = TicketDetails::find($id);
        $ticket->priority = $request['priority'];

        if ($ticket->save()) {
            return $ticket;
        }

        throw new HttpException(400, "Invalid data");
    }

    public function updateStatus(Request $request, $id)
    {
        if (!$id) {
            throw new HttpException(400, "Invalid id");
        }

        $ticket = TicketDetails::find($id);
        $ticket->status = $request['status'];

        if ($ticket->save()) {
            return $ticket;
        }

        throw new HttpException(400, "Invalid data");
    }

    // Add new comment into existing ticket(POST).
    public function addComment(Request $request)
    {
        $comment = new Comment();

        $comment->comment = $request['comment'];
        $comment->ticket_details_id = $request['ticket_details_id'];

        if ($comment->save()) {
            return $comment;
        }

        throw new HttpException(400, "Invalid data");
    }

    // Delete the ticket.
    public function destroy($id)
    {
        if (!$id) {
            throw new HttpException(400, "Invalid id");
        }

        $ticket = TicketDetails::find($id);
        $ticket->delete();

        return response()->json([
            'message' => 'Ticket deleted',
        ], 200);
    }
}
