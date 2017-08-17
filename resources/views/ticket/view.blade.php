@extends('layout.master')
@section('title', 'View Tickets')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Your request is submitted, {!! Session::get('ticket')->user->fname !!}!</h2>
            </div>
        </div>
    </div>
    @if(!empty(Session::get('ticket')))
        <b>Below are the details</b>
        <p>Ticket ID: {!! Session::get('ticket')->id !!}</p>
        <p>OS: {!! Session::get('ticket')->os !!}</p>
        <p>Issue: {!! Session::get('ticket')->issue !!}</p>
    @endif

    <a href="{{URL::to('/')}}"><div class="btn btn-primary">Go To Main</div></a>

@endsection