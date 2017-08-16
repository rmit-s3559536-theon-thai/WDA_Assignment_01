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
		<div class="col-md-8 col-md-offset-2">
			{{ $ticketDetail->id }}		
			{{ $ticketDetail->issue }}
		</div>
	</div>	
@endif


@endsection
