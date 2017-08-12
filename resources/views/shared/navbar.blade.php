<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Brand</a>
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
                <li class="{{ Request::is('its*') ? 'active' : '' }}">
                     <a href="{{ route('its.index') }}">Create Ticket</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>