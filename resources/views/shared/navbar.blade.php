<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <img class="img-responsive" src="{{asset('images/rmit_logo_01.png')}}" alt="RMIT Logo">
        </div>
        <a href="http://www.rmit.edu.au">
            {{--<img class="img img-responsive" src="{{asset('images/rmit_logo_01.png')}}" alt="RMIT Logo">--}}
        </a>
        <a href="{{url('/')}}">
            {{--<img class="img img-responsive" src="{{asset('images/its_logo.png')}}" alt="ITS Logo">--}}
        </a>
    </div>
</div>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('/') ? 'active' : '' }}">
                    <a href="{{ url('/') }}">Home</a>
                </li>

                <li class="{{ Request::is('faq') ? 'active' : '' }}">
                    <a href="{{ url('faq') }}">FAQ</a>
                </li>

                <li class="{{ Request::is('user*') ? 'active' : '' }}">
                     <a href="{{ route('user.create') }}">Create User</a>
                </li>

                <li class="{{ Request::is('ticket*') ? 'active' : '' }}">
                     <a href="{{ route('ticket.create') }}">Create Ticket</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Login<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ Request::is('its*') ? 'active' : '' }}"><a href="{{ route('its.index') }}">Staff</a></li>
                        <li><a href="#">Student</a></li>
                    </ul>
                </li>






                {{--<li class="{{ Request::is('its*') ? 'active' : '' }}">--}}
                     {{--<a href="{{ route('its.index') }}">View All Tickets</a>--}}
                {{--</li>--}}
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>