<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TicketDetails;
use App\Comment;
use App\UserInformation;

class ItsCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ticketDetails = TicketDetails::orderBy('id','DESC')->paginate(5);
        return view('ItsCRUD.index',compact('ticketDetails')) ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ItsCRUD.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'comment' => 'required',
            'status' => 'required',
        ]);
        TicketDetails::create($request->all());
        return redirect()->route('ItsCRUD.index') ->with('success','Ticket created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticketDetails = TicketDetails::find($id);
        return view('ItsCRUD.show',compact('ticketDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticketDetails = TicketDetails::find($id);
        return view('ItsCRUD.edit',compact('ticketDetails'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'comment' => 'required',
            'status' => 'required',
        ]);
        TicketDetails::find($id)->update($request->all());
        return redirect()->route('ItsCRUD.index') ->with('success','Ticket status updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TicketDetails::find($id)->delete();
        return redirect()->route('ItsCRUD.index') ->with('success','Ticket deleted successfully');
    }
}
