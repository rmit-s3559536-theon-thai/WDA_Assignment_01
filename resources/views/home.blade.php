@extends('layout.master') 
@section('title', 'home') 


@section('content')
{{--<div class="container">--}}
    {{--<div class="content">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-8">--}}
                {{--<img class="img-responsive img-rounded bld80Image" src="images/bld80.jpg"/>--}}
            {{--</div>--}}
            {{--<div class="col-md-4">--}}
                {{--<p class="h4">RMIT university runs ITS to help students address IT issues. ITS office is placed on level 3 at building 80</p>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</div>--}}
{{--</div>--}}

<div class="container">
    <h2>Welcome To ITS</h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <div class="col-md-7">
                        <img class="imgStyle" src="images/bld80.jpg" alt="Building 80">
                    </div>
                    <div class="col-md-5">
                        <p>sadfdsfasfadfads</p>
                    </div>
                    {{--<div class="carousel-caption">--}}
                    {{--<h3>Los Angeles</h3>--}}
                    {{--<p>LA is always so much fun!</p>--}}
                    {{--</div>--}}
                </div>

                <div class="item">
                    <div class="col-md-7">
                        <img class="imgStyle" src="images/its_image.jpg" alt="ITS poster" style="width:100%;">
                    </div>
                    <div class="col-md-5">
                        <p>TEST</p>
                    </div>
                    {{--<div class="carousel-caption">--}}
                    {{--<h3>Chicago</h3>--}}
                    {{--<p>Thank you, Chicago!</p>--}}
                    {{--</div>--}}
                </div>

                {{--<div class="item">--}}
                {{--<img src="ny.jpg" alt="New York" style="width:100%;">--}}
                {{--<div class="carousel-caption">--}}
                {{--<h3>New York</h3>--}}
                {{--<p>We love the Big Apple!</p>--}}
                {{--</div>--}}
                {{--</div>--}}

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
</div>
@endsection


