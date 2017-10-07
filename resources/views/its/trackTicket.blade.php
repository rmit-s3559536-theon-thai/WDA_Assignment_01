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
    	{!! Form::model(['action' => 'ITSController']) !!}
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
			<h3>Ticket Information</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Ticket ID</h3>
				</div>
				<div class="panel-body">
					{{ $ticketDetail->id }}
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Status</h3>
				</div>
				<div class="panel-body">
					{{ $ticketDetail->status }}
				</div>
			</div>


			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Operating System</h3>
				</div>
				<div class="panel-body">
					{{ $ticketDetail->os }}
				</div>
			</div>
			

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Issue</h3>
				</div>
				<div class="panel-body">
					{{ $ticketDetail->issue }}
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading">Comments</div>
				
				<!-- List group -->
				<ul class="list-group">
					@foreach ($ticketDetail->comments as $key => $comments)
						@if ($key === 0)
							<li class="list-group-item">My initial Comment: {{ $comments->comment }}</li>
						@else
							<li class="list-group-item">Technician: {{ $comments->comment }}</li>
						@endif
					@endforeach
				</ul>
			</div>


			
		</div>
	</div>
@endif
@endsection
