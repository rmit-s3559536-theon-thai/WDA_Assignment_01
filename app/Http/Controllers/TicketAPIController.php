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
    public function index(TicketDetails $ticket)
    {
//        $tickets = TicketDetails::paginate(10);

        $tickets = $ticket->with('comments')->get();
        if (!$tickets) {
            throw new HttpException(400, "Invalid data");
        }

        return response()->json(
            $tickets,
            200
        );
    }

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


    public function update(Request $request, $id)
    {
        if (!$id) {
            throw new HttpException(400, "Invalid id");
        }

        $ticket = TicketDetails::find($id);

        $ticket->os = $request->input('os');
        $ticket->issue = $request->input('issue');
        $ticket->status = $request->input('status');
        $ticket->priority = $request->input('priority');
        $ticket->escLevel = $request->input('escLevel');
        $ticket->comments->comment = $request->input('comment');
        $ticket->user_id = $request['user_id'];

        if ($ticket->save()) {
            return $ticket;
        }

        throw new HttpException(400, "Invalid data");
    }

    public function updateEscLevel(Request $request, $id)
    {
        if (!$id) {
            throw new HttpException(400, "Invalid id");
        }

        $ticket = TicketDetails::find($id);
//        $ticket->priority = $request['priority'];
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
//        $ticket->escLevel = $request['escLevel'];

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
//        $ticket->escLevel = $request['escLevel'];

        if ($ticket->save()) {
            return $ticket;
        }

        throw new HttpException(400, "Invalid data");
    }

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
