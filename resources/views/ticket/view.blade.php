@extends('layout.master')
@section('title', 'View Tickets')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Your request is submitted successfully!</h2>
            </div>
        </div>
    </div>
    @if(!empty(Session::get('ticket')))
        <b>Below are the details</b> 
        <p>OS: {!! Session::get('ticket')->os !!}</p>
        <p>Issue: {!! Session::get('ticket')->issue !!}</p>
    @endif

    <a href="{{URL::to('/')}}"><div class="btn btn-primary">Go To Main</div></a>

@endsection