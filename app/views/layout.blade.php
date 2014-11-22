<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    @section('head')
    <title></title>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    @show
</head>

<body>
<div class="container">

@yield('header')

@yield('menu')

{{--menu section--}}
@include('navigation')

@yield('content')

@include('footer')

</div>
</body>
</html>



