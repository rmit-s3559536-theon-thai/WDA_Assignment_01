<html>
<head>
    <title> @yield('title') </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="{{ asset('css/sharedStyle.css') }}">

    {{-- font family --}}
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body class="backgroundImage">
@include('shared.navbar')
<div class="container-fluid">
    @yield('content')
</div>
</body>
</html>