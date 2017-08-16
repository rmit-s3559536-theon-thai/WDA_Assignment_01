<footer class="panel-footer">
    <div class="row bg-faded">
        <div class="col-md-2 col-md-offset-1">
            <p class="text-center">Home</p>
            <a class="text-center" href="{{URL::to('/')}}">Home</a>
        </div>
        <div class="col-md-2">
            <p class="text-center">FAQ</p>
            <a class="text-center" href="{{URL::to('faq')}}">FAQ</a>
        </div>
        <div class="col-md-2">
            <p class="text-center">Creation</p>
            <a class="text-center" href="{{URL::to('user/create')}}">Create User</a><br/>
            <a class="text-center" href="{{URL::to('ticket/create')}}">Create ticket</a>
        </div>
        <div class="col-md-2">
            <p class="text-center">Login</p>
            <a class="text-center" href="{{URL::to('its')}}">ITS Staff</a><br/>
            <a class="text-center" href="{{URL::to('/')}}">Student</a>
        </div>
        <div class="col-md-2">
            <p class="text-center">Find RMIT on Social Media</p>
            <div class="row">
                <div class="col-md-4">
                    <a href="{{ URL::to('https://www.facebook.com/RMITuniversity/') }}">
                        <img class="img-responsive" src="{{ asset('images/facebook.png') }}" />
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ URL::to('https://twitter.com/RMIT?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor') }}">
                        <img class="img-responsive" src="{{ asset('images/twitter.png') }}" />
                    </a>

                </div>
                <div class="col-md-4">
                    <a href="{{ URL::to('https://www.instagram.com/rmituniversity/?hl=en') }}">
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