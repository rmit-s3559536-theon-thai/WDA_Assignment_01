<?php

namespace App\Http\Controllers;

use App\TicketDetails;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class TicketAPIController extends Controller
{
    public function index()
    {
        $tickets = TicketDetails::paginate(10);

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
        $ticket = new TicketDetails;
        $ticket->os = $request->input('os');
        $ticket->issue = $request->input('issue');
        $ticket->status = $request->input('status');
        $ticket->comments->comment = $request->input('comment');

        if ($ticket->save()) {
            return $ticket;
        }

        throw new HttpException(400, "Invalid data");
    }

    public function update(Request $request, $id)
    {
        if (!$id) {
            throw new HttpException(400, "Invalid id");
        }

        $ticket = new TicketDetails;
        $ticket->os = $request->input('os');
        $ticket->issue = $request->input('issue');
        $ticket->status = $request->input('status');
        $ticket->comments->comment = $request->input('comment');

        if ($ticket->save()) {
            return $ticket;
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
