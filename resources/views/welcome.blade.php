@extends('base')
@section('content')
<h3>Access code: {{ $data['code'] }} </h3>

@if(isset($data['message']))
<p>{{ $data['message'] }}</p>
@endif

<form class="form-where-u" method="post">
    {!! csrf_field() !!}
    <h2 class="form-where-u-heading">Onde você esta?</h2>
    <label for="inputCep" class="sr-only">Cep</label>
    <input type="text" name="cep" id="inputCep" class="form-control" placeholder="CEP" value="{{ $data['cep'] or ""}}" required>
    <label for="inputCity" class="sr-only">Cidade</label>
    <input type="text" name="city" id="inputCity" class="form-control" placeholder="Cidade" value="{{ $data['city'] or ""}}" rrequired disabled>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
</form>

<a href="{{ url('logs') }}">Ver Logs.</a> <a href="{{ url('clearSession') }}">Clear Session.</a>
@endsection