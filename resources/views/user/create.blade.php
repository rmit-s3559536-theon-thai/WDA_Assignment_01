@extends('layout.master')
@section('title', 'Add New User')
@section('content')
<div class="row">
    <div class="col-lg-6 col-lg-offset-3 margin-tb">
        <div class="pull-left">
            <h2>Add New User</h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
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
    </div>
</div>


<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        {!! Form::model($user, ['action' => 'UserController@store']) !!}

            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', '', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('fname', 'First Name') !!}
                {!! Form::text('fname', '', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lname', 'Last Name') !!}
                {!! Form::text('lname', '', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('studentno', 'Student Number') !!}
                {!! Form::text('studentno', '', ['class' => 'form-control']) !!}
            </div>



            <button class="btn btn-primary" type="submit">Add User</button>

        {!! Form::close() !!}
    </div>
</div>


@endsection