<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    @section('head')
    <title></title>
<!--    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>-->
    <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    @show
</head>

<body>

@include('admin.navigation')

<div class="container">
    <div class="row">
        <form class="form-inline" role="form">
            <div class="form-group">
                <div class="input-group">
                    <label class="sr-only" for="exampleInputEmail2">Email address</label>
                    <div class="input-group-addon">Выберите отделение</div>
                    <select class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>

                </div>
            </div>
            <button type="submit" class="btn btn-default">ОК</button>
        </form>
    </div>
    <div class="row">


        {{--@yield('header')--}}

        {{--@yield('menu')--}}

        {{--menu section--}}
        {{--@include('navigation')--}}

        @yield('content')

    </div>

</div>
</body>
</html>



