<footer class="panel-footer">
    <div class="row">
        <div class="col-md-2 col-md-offset-1" style="text-align: center;">
            <p class="text-center h4">Home</p>
            <a class="text-center" href="{{URL::to('/')}}" style="color:gray">Home</a>
        </div>
        <div class="col-md-2" style="text-align: center;">
            <p class="text-center h4">FAQ</p>
            <a class="text-center" href="{{URL::to('faq')}}" style="color:gray">FAQ</a>
        </div>
        <div class="col-md-2" style="text-align: center;">
            <p class="text-center h4">Creation</p>
            <a class="text-center" href="{{URL::to('user/create')}}" style="color:gray">Create User</a><br/>
            <a class="text-center" href="{{URL::to('ticket/create')}}" style="color:gray">Create ticket</a>
        </div>
        <div class="col-md-2" style="text-align: center;">
            <p class="text-center h4">Login</p>
            <a class="text-center" href="{{URL::to('its')}}" style="color:gray">ITS Staff</a><br/>
            <a class="text-center" href="{{ url('trackTicket') }}" style="color:gray">Student</a>
        </div>
        <div class="col-md-2" style="text-align: center;">
            <p class="text-center">Find RMIT on Social Media</p>
            <div class="row">
                <div class="col-md-4 col-sm-2 col-xs-2">
                    <a href="{{ URL::to('https://www.facebook.com/RMITuniversity/') }}" target="_blank">
                        <img class="img-responsive" src="{{ asset('images/facebook.png') }}" />
                    </a>
                </div>
                <div class="col-md-4 col-sm-2 col-xs-2">
                    <a href="{{ URL::to('https://twitter.com/RMIT?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor') }}" target="_blank">
                        <img class="img-responsive" src="{{ asset('images/twitter.png') }}" />
                    </a>

                </div>
                <div class="col-md-4 col-sm-2 col-xs-2">
                    <a href="{{ URL::to('https://www.instagram.com/rmituniversity/?hl=en') }}" target="_blank">
                        <img class="img-responsive" src="{{ asset('images/insta.png') }}" />
                    </a>
                </div>
            </div>
        </div>
    </div>

    <hr class="divider" />
    <div class="row">
        <div class="col-md col-md-offset-1">
            <p>&copy; 2017 RMIT - Web Database Application Assignment 1; Theon Thai, Minyoung Cho<p>
        </div>
    </div>
</footer>