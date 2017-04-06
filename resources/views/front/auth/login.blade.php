@extends('front.layout')
@section('title', $title)

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">{{ $title }}</h3>
    </div>
</div>

<div class='row'>
    <div class="col-lg-12">
        <form action="{{ action("Front\AuthController@postLogin") }}" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name='email' class="form-control" id="exampleInputEmail1" placeholder="Email" required="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Пароль</label>
                <input type="password" name='password' class="form-control" id="exampleInputPassword1" placeholder="Password" required="">
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block">Войти</button>
            <a href="{{ action("Front\AuthController@getRegistr") }}" type="button" class="btn btn-primary btn-lg btn-block">
                Зарегистрироваться
            </a>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </div>
</div>

@endsection
