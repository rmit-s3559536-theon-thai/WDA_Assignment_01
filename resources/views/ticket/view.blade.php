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
        <p>First Name: {!! Session::get('name') !!}</p>
        
        <p>OS: {!! Session::get('ticket')->os !!}</p>
        <p>Issue: {!! Session::get('ticket')->issue !!}</p>
    @endif

    <a href="{{URL::to('/')}}"><div class="button button1">Go To Main</div></a>

@endsection