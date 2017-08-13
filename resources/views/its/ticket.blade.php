@extends('layout.master')
@section('title', 'View all Tickets')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ticket {{ $ticketDetail->id}}</h2>

                <h2>OS : {{ $ticketDetail->os }}</h2>
                <h2>Issue : {{ $ticketDetail->issue }}</h2>
            </div>
        </div>
    </div>

@endsection