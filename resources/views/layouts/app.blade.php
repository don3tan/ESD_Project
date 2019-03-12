<!doctype html>
<html>
    <head>
      
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','Katherine\'s Ecommerce')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap/css/jumbotron.css')}}">

    </head>
    <body>
        <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
        <script src="{{asset('bootstrap/js/jquery.js')}}"></script>
        @include('inc.navbar')
        <div class='jumbotron'>
            @yield('content')
        </div>
    </body>
</html>
