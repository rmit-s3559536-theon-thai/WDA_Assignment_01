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
                {{--<li class="{{ Request::is('user*') ? 'active' : '' }}">--}}
                     {{--<a href="{{ route('user.create') }}">Create User</a>--}}
                {{--</li>--}}

                {{--<li class="{{ Request::is('ticket*') ? 'active' : '' }}">--}}
                     {{--<a href="{{ route('ticket.create') }}">Create Ticket</a>--}}
                {{--</li>--}}
            </ul>

            <!-- Authentication Links -->
            @if (Auth::guest())
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="glyphicon glyphicon-user" href="{{ route('login') }}">Login</a></li>
                    <li><a class="glyphicon glyphicon-plus" href="{{ route('register') }}">Register</a></li>
                </ul>
            @else
                <ul class="nav navbar-nav">
                    <li class="{{ Request::is('user*') ? 'active' : '' }}">
                        <a href="{{ route('user.create') }}">Create User</a>
                    </li>
                    <li class="{{ Request::is('ticket*') ? 'active' : '' }}">
                        <a href="{{ route('ticket.create') }}">Create Ticket</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Welcome, {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            @endif
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>