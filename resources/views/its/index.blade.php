@extends('layout.master')
@section('title', 'View all Tickets')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ITS</h2>


                 @foreach($ticketDetail as $key => $value)
                 	{{ $value->user->fname }}
                 	{{ $value->user->lname }} |
                 	{{ $value->os }} |
                 	{{ $value->issue }}
                 	<a href="{{  URL::to('its/' . $value->id . '/edit') }}">Click here</a>

                 	<br/>
                 @endforeach
            </div>
        </div>
    </div>

@endsection