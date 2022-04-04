<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="base-url" content="{{ url('/') }}">
    <title>Todo App</title>
    <!-- Bootstrap core CSS -->
    <link href='{{ asset("bootstrap-4.6.0-dist/css/bootstrap.min.css") }}' rel="stylesheet" />
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    @yield('contents')
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data-2012-2022.min.js"></script>
<script>
        $( document ).ready(function() {
            var refresh = window.location.protocol + "//" + window.location.host + window.location.pathname + '?arg='+moment.tz.guess()+'';    
            window.history.pushState({ path: refresh }, '', refresh);
            $('#timezone').val(moment.tz.guess())
        });        
    </script>
</html>
