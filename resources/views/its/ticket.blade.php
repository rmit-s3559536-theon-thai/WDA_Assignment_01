@extends('layout.master')
@section('title', 'View all Tickets')
@section('content')
    
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <table class="table table-striped">
                <thead>
                <tr>
                	<th  style="width:90px;">Ticket ID</th>
                    <th>Student Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>OS</th>
                    <th>Issue</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $ticketDetail->id }}</td>
                        <td>{{ $ticketDetail->user->studentno }}</td>
                        <td>{{ $ticketDetail->user->fname }}</td>
                        <td>{{ $ticketDetail->user->lname }}</td>
                        <td>{{ $ticketDetail->os }}</td>
                        <td>{{ $ticketDetail->issue }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <h4>Comments</h4>
            @foreach ($ticketDetail->comments as $comments)
            <div class="well">
                    {{ $comments->comment }}
            </div>
            @endforeach
        </div>
    </div>
    


    {!! Form::model($ticketDetail, ['method' => 'PATCH','route' => ['its.update', $ticketDetail->id]]) !!}
        @include('its.form')
    {!! Form::close() !!}



@endsection