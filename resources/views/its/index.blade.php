@extends('layout.master')
@section('title', 'View all Tickets')
@section('content')
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>Submitted Tickets Status</h2>
        </div>
    </div>
    <br/>
    <br/>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>OS</th>
                        <th>Issue</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ticketDetail as $key => $value)
                        <tr>
                            <td>{{ $value->user->fname }}</td>
                            <td>{{ $value->user->lname }}</td>
                            <td>{{ $value->os }}</td>
                            <td>{{ $value->issue }}</td>
                            <td>{{ $value->status }}</td> 
                            <td><a class="btn btn-primary" href="{{  URL::to('its/' . $value->id . '/edit') }}">Click Here</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection