@extends('layout.master')
@section('title', 'Submit a Ticket')
@section('content')


<div class="row">
    <div class="col-lg-6 col-lg-offset-3 margin-tb">
        <div class="pull-left">
            <h2 class="headingFont">Request a Service</h2>
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
        {!! Form::open(['action' => 'TicketController@store']) !!}

            <div class="form-group">
                {!! Form::Label('user', 'User ID', ['style' => 'color: white']) !!}
                {{--<select class="form-control" name="user_id">--}}
                    {{--@foreach($users as $user)--}}
                    {{--<option value="{{$user->id}}">{{$user->fname}} {{$user->lname}}</option>--}}
                    {{--@endforeach--}}
                {{--</select>--}}
                <input name="user_id" type="text" value="{{ Auth::user()->id}}" />
                {{--<input type="text" value="{{ Auth::user()->name }}" />--}}
            </div>

            <div class="form-group">
                {!! Form::label('os', 'Operating System', ['style' => 'color: white']) !!}
                {!! Form::text('os', '', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('issue', 'Issue', ['style' => 'color: white']) !!}
                {!! Form::text('issue', '', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('comment', 'Comments', ['style' => 'color: white']) !!}
                {!! Form::text('comment', '', ['class' => 'form-control']) !!}
            </div>



            <button class="btn btn-primary" type="submit">Submit Ticket</button>

        {!! Form::close() !!}
    </div>
</div>


@endsection