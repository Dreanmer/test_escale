<!DOCTYPE html>
<html>
    <head>
        <title>Onde você está?</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

    </head>
    <body>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
