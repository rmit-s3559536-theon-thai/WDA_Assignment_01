@extends('layout.master')
@section('title', 'View all Tickets')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ticket {{ $ticketDetail->id}}</h2>

                <h2>{{ $ticketDetail->os }}</h2>
                <h2>{{ $ticketDetail->issue }}</h2>
            </div>
        </div>
    </div>

@endsection