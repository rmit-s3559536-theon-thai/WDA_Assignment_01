@extends('layout.master')
@section('title', 'View Tickets')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2>Your request is submitted, {{ Auth::user()->name }}!</h2>
        </div>
    </div>
    @if(!empty(Session::get('ticket')))
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="jumbotron">
                    <p>Ticket ID: {!! Session::get('ticket')->id !!}</p>
                    <p>OS: {!! Session::get('ticket')->os !!}</p>
                    <p>Issue: {!! Session::get('ticket')->issue !!}</p>
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <a href="{{URL::to('/')}}"><div class="btn btn-primary">Go To Main</div></a>
        </div>
    </div><br />
@endsection