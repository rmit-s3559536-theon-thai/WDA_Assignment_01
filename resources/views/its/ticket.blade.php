@extends('layout.master')
@section('title', 'View all Tickets')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>Ticket {{ $ticketDetail->id}}</h4>

                <h4>OS : {{ $ticketDetail->os }}</h4>
                <h4>Issue : {{ $ticketDetail->issue }}</h4>
            </div>
        </div>
    </div>

@endsection