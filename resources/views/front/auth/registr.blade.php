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
        <form action="{{ action("Front\AuthController@postRegistr") }}" method="post" enctype='multipart/form-data' >
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name='email' class="form-control" id="exampleInputEmail1" placeholder="Email" required="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Пароль</label>
                <input type="password" name='password' class="form-control" id="exampleInputPassword1" placeholder="Пароль" required="">
            </div>
            <div class="form-group">
                <label for="name">Наименование</label>
                <input type="text" name='name' class="form-control" id="name" placeholder="Наименование" required="">
            </div>
            <div class="form-group">
                <label for="phone">Телефон</label>
                <input type="text" name='phone' class="form-control" id="phone" placeholder="Наименование" required="">
            </div>
            <div class="form-group">
                <label for="address">Адрес</label>
                <input type="text" name='address' class="form-control" id="address" placeholder="Наименование" required="">
            </div>
            <div class="form-group">
                <label for="logo">Фото</label>
                <input type="file" name='logo' id="logo" required="">
            </div>
            <div class="form-group">
                <label for="note">Описание</label>
                <textarea name='note' class='form-control' id='note' placeholder="Описание" required=""></textarea>
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block">Зарегистрироваться</button>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </div>
</div>

@endsection
