@extends('layout.master') 
@section('title', 'FAQ') 


@section('content')
<div class="container">
    <div class="content">
        <h2>FAQ</h2>

        <div class="panel-group">
            <div class="panel panel-primary">
                {{-- Panel Heading --}}
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse1">Where can I change my rmit account password?</a>
                    </h4>
                </div>
                {{-- Panel Body --}}
                <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>You can change your password through the given link below</p>
                        <a class="button buttonBlue" href="https://www.rmit.edu.au/students/support-and-facilities/it-services-for-students/password-assistance">Click here to change password</a>
                    </div>
                    {{--<div class="panel-footer">Panel Footer</div>--}}
                </div>
            </div>
        </div>

        <div class="panel-group">
            <div class="panel panel-info">
                {{-- Panel Heading --}}
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse2">I need Oracle account for Database Concept subject</a>
                    </h4>
                </div>
                {{-- Panel Body --}}
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>You should request a ticket through this link with specific description.</p>
                        <a class="button buttonLightBlue" href="{{ URL::to('/ticket/create') }}">Request a ticket</a>
                    </div>
                    {{--<div class="panel-footer">Panel Footer</div>--}}
                </div>
            </div>
        </div>

        <div class="panel-group">
            <div class="panel panel-danger">
                {{-- Panel Heading --}}
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse3">I want to install an application into RMIT MyDesktop.</a>
                    </h4>
                </div>
                {{-- Panel Body --}}
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>You should request a ticket to get permission for installing the application you want to use on MyDesktop.</p>
                        <a class="button buttonRed" href="{{ URL::to('/ticket/create') }}">Request a ticket</a>
                    </div>
                    {{--<div class="panel-footer">Panel Footer</div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection