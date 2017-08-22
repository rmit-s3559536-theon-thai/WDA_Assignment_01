@extends('layout.master') 
@section('title', 'Find Ticket')


@section('content')

@if(Session::has('notValidId'))
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('notValidId') }}</p>
		</div>
	</div>
@endif

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
				@foreach ($ticketDetail->comments as $comments)
					<div class="well">
						{{ $comments->comment }}
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endif
@endsection
