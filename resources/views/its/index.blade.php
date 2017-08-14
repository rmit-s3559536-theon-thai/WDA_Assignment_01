@extends('layout.master')
@section('title', 'View all Tickets')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Submitted Tickets Status</h2>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="text-center">First Name</th>
                        <th class="text-center">Last Name</th>
                        <th class="text-center">Issue</th>
                    </tr>
                    </thead>
                    <tbody>
                 @foreach($ticketDetail as $key => $value)
                        <tr>
                            <td class="text-center">{{ $value->user->fname }}</td>
                            <td class="text-center">{{ $value->user->lname }}</td>
                            <td class="text-center"><a class="button buttonRed" href="{{  URL::to('its/' . $value->id . '/edit') }}">Click Here</a></td>
                        </tr>
                    {{--<p>Name : {{ $value->user->fname }} {{ $value->user->lname }}</p>--}}
                 	{{--<p>OS : {{ $value->os }}</p>--}}
                 	{{--<p>Issue : {{ $value->issue }}</p>--}}
                 	{{--<a class="button buttonRed" href="{{  URL::to('its/' . $value->id . '/edit') }}">Click Here</a>--}}

                 	{{--<br/><br/>--}}
                 @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection