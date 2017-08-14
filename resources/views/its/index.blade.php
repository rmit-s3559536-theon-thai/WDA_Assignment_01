@extends('layout.master')
@section('title', 'View all Tickets')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Submitted Tickets Status</h2>


                 @foreach($ticketDetail as $key => $value)
                    <p>Name : {{ $value->user->fname }} {{ $value->user->lname }}</p>
                 	{{--<p>OS : {{ $value->os }}</p>--}}
                 	{{--<p>Issue : {{ $value->issue }}</p>--}}
                 	<a class="button buttonRed" href="{{  URL::to('its/' . $value->id . '/edit') }}">Click Here</a>

                 	<br/><br/>
                 @endforeach
            </div>
        </div>
    </div>

@endsection