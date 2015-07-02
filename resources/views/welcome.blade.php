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

            <h3>Access code: {{ $code }} </h3>

            <p>{{ $message }}</p>

            <form class="form-where-u" method="post">
                {!! csrf_field() !!}
                <h2 class="form-where-u-heading">Onde você esta?</h2>
                <label for="inputCep" class="sr-only">Cep</label>
                <input type="text" name="cep" id="inputCep" class="form-control" placeholder="CEP" required autofocus>
                <label for="inputCity" class="sr-only">Cidade</label>
                <input type="text" name="city" id="inputCity" class="form-control" placeholder="Cidade" required disabled>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
            </form>

            <a href="{{ url('logs') }}">Ver Logs.</a> <a href="{{ url('clearSession') }}">Clear Session.</a>

        </div> <!-- /container -->
    </body>
</html>
