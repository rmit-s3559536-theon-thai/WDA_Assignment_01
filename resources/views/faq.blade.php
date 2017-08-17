@extends('layout.master') 
@section('title', 'FAQ') 


@section('content')
<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
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
                                <a class="btn btn-primary" href="https://www.rmit.edu.au/students/support-and-facilities/it-services-for-students/password-assistance">Click here to change password</a>
                            </div>
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
                                <a class="btn btn-info" href="{{ URL::to('/ticket/create') }}">Request a ticket</a>
                            </div>
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
                                <a class="btn btn-danger" href="{{ URL::to('/ticket/create') }}">Request a ticket</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel-group">
                    <div class="panel panel-success">
                        {{-- Panel Heading --}}
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse4">What does ITS do?</a>
                            </h4>
                        </div>
                        {{-- Panel Body --}}
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>ITS operates ICT services on behalf of RMIT students, staff and research partners. This includes the following:</p>
                                <ol>
                                    <li>IT Strategy and Account management – incorporating enterprise architecture, strategic investment planning, demand management and account management</li>
                                    <li>IT Security and Risk management – incorporating IT security/ risk governance and control, forensics and investigations, security operations and security standards awareness</li>
                                    <li>Solution delivery – incorporating solution consulting, program and portfolio management, project management, business analysis, development, testing and support services</li>
                                    <li>End user services – incorporating the Service and Support Centre, IT Service Management, desktop, laptops, software, telephony, mobile phones, tablets and printing services</li>
                                    <li>Teaching, learning and collaboration – incorporating email and online collaboration, interactive learning spaces, lecture capture support, learning management, student portals</li>
                                    <li>Audio Visual services – incorporating AV events, loans equipment and video conferencing</li>
                                    <li>Research high performance computing and data storage</li>
                                    <li>Networks and application services – incorporating application hosting and support, core infrastructure management and wireless network access.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
@endsection