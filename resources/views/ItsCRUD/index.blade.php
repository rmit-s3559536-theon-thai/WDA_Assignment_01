@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ticket Status Update</h2>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>OS</th>
            <th>Issue</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($ticketDetails as $key => $value)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $value->user->fname }} {{ $value->user->lname }}</td>
                <td>{{ $value->os }}</td>
                <td>{{ $value->issue }}</td>
                <td>{{ $value->status}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('ItsCRUD.show',$value->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('ItsCRUD.edit',$value->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['ItsCRUD.destroy', $value->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $ticketDetails->render() !!}
@endsection