<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('faq') }}">FAQ</a>

        <!-- Authentication Links -->
        @if (Auth::guest())
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @else
            <a href="{{ route('ticket.create') }}">Create Ticket</a>
            <a href="{{ url('trackTicket') }}">Find My Ticket</a>
        @endif
    </div>
</div>

<div class="container-fluid">

    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="navbar navbar-right">
                @if (Auth::check())
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="text-decoration: none">
                        <span style="font-size: 30px;color:white">Welcome, {{ Auth::user()->name }}</span> <span class="caret"></span>
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
                @endif
            </div>
        </div>

        <div class="col-md-1">
            <span class="navbar navbar-right" style="font-size:40px;cursor:pointer;color:white" onclick="openNav()">&#9776;</span>
        </div>
    </div>

</div>


<script>
    function openNav() {
        document.getElementById("myNav").style.height = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.height = "0%";
    }
</script>