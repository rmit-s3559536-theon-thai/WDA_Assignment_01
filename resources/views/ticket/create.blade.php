@extends('layout.master')
@section('title', 'Submit a Ticket')
@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New User</h2>
        </div>
    </div>
</div>


@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


{!! Form::open(['action' => 'TicketController@store']) !!}

<div class="form-group">
    {!! Form::Label('user', 'User') !!}
    <select class="form-control" name="user_id">
        @foreach($users as $user)
        <option value="{{$user->id}}">{{$user->fname}} {{$user->lname}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    {!! Form::label('os', 'Operating System') !!}
    {!! Form::text('os', '', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('issue', 'Issue') !!}
    {!! Form::text('issue', '', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('comment', 'Comments') !!}
    {!! Form::text('comment', '', ['class' => 'form-control']) !!}
</div>



<button class="btn btn-primary" type="submit">Submit Ticket now</button>

{!! Form::close() !!}
@endsection