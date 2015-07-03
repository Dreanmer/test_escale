@extends('base')
@section('content')
    <form class="form-where-u" method="POST" action="{{url('auth/login')}}">
        {!! csrf_field() !!}
        <h2 class="form-where-u-heading">Login</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required value="{{ old('email') }}">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Login">
        <div class="panel panel-default m-t">
            <div class="panel-body">
                <ul>
                    <li>usuario: admin@test.com</li>
                    <li>senha: password</li>
                </ul>
            </div>
        </div>
    </form>
@endsection