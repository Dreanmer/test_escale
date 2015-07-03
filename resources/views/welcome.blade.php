@extends('base')
@section('content')
<form class="form-where-u" id="whereu" method="post">
    {!! csrf_field() !!}
    <h2 class="form-where-u-heading">Onde você esta?</h2>
    <label for="inputCep" class="sr-only">Cep</label>
    <input type="text" name="cep" id="inputCep" class="form-control" placeholder="CEP" value="{{ $session['cep'] or ""}}" required>
</form>
@endsection