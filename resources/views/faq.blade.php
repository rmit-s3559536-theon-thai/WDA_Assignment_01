@extends('layout.master') 
@section('title', 'FAQ') 


@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="text-center">IT services for students</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p>RMIT offers a wide range of information technologies (IT) to support your learning experience and help you engage with the University community.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-2">

        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-1">
            <h2>Frequently Asked Questions</h2>

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
                            <a class="btn btn-primary" href="https://www.rmit.edu.au/students/support-and-facilities/it-services-for-students/password-assistance" target="_blank">Click here to change password</a>
                        </div>
                    </div>
                </div>

                <div class="panel panel-info">
                    {{-- Panel Heading --}}
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse2">I cannot connect to RMIT wi-fi.</a>
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

        <div class="col-md-4" style="background-color: lightgray;margin-bottom:10px">
            <h2 class="text-center">General Inquiries</h2>
            <div class="row">
                <div class="col-md-3">
                    <a href="{{ URL::to('https://www.rmit.edu.au/students/support-and-facilities/it-services-for-students/wireless') }}" target="_blank">
                        <img class="img img-responsive" src="{{ asset('images/wifi.png') }}" />
                    </a>
                    <div class="h5 text-center">Wireless</div>
                </div>

                <div class="col-md-3">
                    <a href="{{ URL::to('https://www.rmit.edu.au/students/support-and-facilities/it-services-for-students/password-assistance') }}" target="_blank">
                        <img class="img img-responsive" src="{{ asset('images/password.png') }}" />
                    </a>
                    <div class="h5 text-center">Password</div>
                </div>

                <div class="col-md-3">
                    <a href="{{ URL::to('https://www.rmit.edu.au/students/support-and-facilities/it-services-for-students/blackboard') }}" target="_blank">
                        <img class="img img-responsive"src="{{ asset('images/blackboard.png') }}" />
                    </a>
                    <div class="h5 text-center">Blackboard</div>
                </div>

                <div class="col-md-3">
                    <a href="{{ URL::to('https://www.rmit.edu.au/students/support-and-facilities/it-services-for-students/mydesktop') }}" target="_blank">
                        <img class="img img-responsive"src="{{ asset('images/desktop.png') }}" />
                    </a>
                    <div class="h5 text-center">myDesktop</div>
                </div>

                <div class="col-md-3">
                    <a href="{{ URL::to('https://www.rmit.edu.au/students/support-and-facilities/it-services-for-students/email') }}" target="_blank">
                        <img class="img img-responsive"src="{{ asset('images/email.png') }}" />
                    </a>
                    <div class="h5 text-center">Email</div>
                </div>

                <div class="col-md-3">
                    <a href="{{ URL::to('https://www.rmit.edu.au/students/support-and-facilities/it-services-for-students/google-apps') }}" target="_blank">
                        <img class="img img-responsive"src="{{ asset('images/google.png') }}" />
                    </a>
                    <div class="h5 text-center">Google-Apps</div>
                </div>

                <div class="col-md-3">
                    <a href="{{ URL::to('https://www.rmit.edu.au/students/support-and-facilities/it-services-for-students/printing') }}" target="_blank">
                        <img class="img img-responsive"src="{{ asset('images/printer.png') }}" />
                    </a>
                    <div class="h5 text-center">Printing</div>
                </div>

                <div class="col-md-3">
                    <a href="{{ URL::to('https://www.rmit.edu.au/students/support-and-facilities/it-services-for-students/computer-access') }}" target="_blank">
                        <img class="img img-responsive"src="{{ asset('images/access.png') }}" />
                    </a>
                    <div class="h5 text-center">Computer Access</div>
                </div>

                <div class="col-md-3">
                    <a href="{{ URL::to('https://www.rmit.edu.au/students/support-and-facilities/it-services-for-students/audio-visual') }}" target="_blank">
                        <img class="img img-responsive"src="{{ asset('images/aud-vis.png') }}" />
                    </a>
                    <div class="h5 text-center">Audio-Visual</div>
                </div>

                <div class="col-md-3">
                    <a href="{{ URL::to('https://www.rmit.edu.au/students/support-and-facilities/it-services-for-students/service-and-support-centre') }}" target="_blank">
                        <img class="img img-responsive"src="{{ asset('images/service.png') }}" />
                    </a>
                    <div class="h5 text-center">Service and Support Center</div>
                </div>
            </div>
        </div>
    </div>
@endsection