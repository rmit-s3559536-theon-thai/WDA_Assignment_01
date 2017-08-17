@extends('layout.master') 
@section('title', 'home') 


@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
    	{!! Form::model(['action' => 'itsController@postTrackTicket']) !!}
	        <div class="form-group">

                {!! Form::label('ticket_id', 'Ticket ID') !!}
    			{!! Form::text('ticket_id', '', ['class' => 'form-control']) !!}
	        </div>
	        <div class="form-group">
	            <button class="btn btn-primary" type="submit">Find</button>
	        </div>
        {!! Form::close() !!}
    </div>
</div>


@if(isset($ticketDetail))
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="jumbotron">
				<p>Ticket ID : {{ $ticketDetail->id }}</p>
				<p>Issue : {{ $ticketDetail->issue }}</p>
			</div>

		</div>
	</div>
@else
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="jumbotron">
				<p>THe ID does not exist in the database.</p>
			</div>
		</div>
	</div>
@endif
@endsection
