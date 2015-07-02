@extends('base')
@section('content')
    <form class="form-where-u" method="POST" action="/auth/login">
        {!! csrf_field() !!}
        <h2 class="form-where-u-heading">Login</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required value="{{ old('email') }}">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <p>usuario: admin@test.com senha: password</p>
    </form>
@endsection