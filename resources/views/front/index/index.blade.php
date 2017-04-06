@extends('front.layout')
@section('title', $title)

@section('content')

<div class="row" style="margin-top: 15px;">
    <div class="col-lg-12">
        <a href='{{ action("Front\AuthController@getLogin") }}' type="button" class="btn btn-primary btn-lg btn-block">
            Войти/Зарегистрироваться
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">{{ $title }}</h3>
    </div>
</div>


@foreach ($items as $i)
    <div class="row">
        <div class="col-md-12">
            <h5 style="text-align: center;">{{ $i->name }}</h5>
        </div>
        <div class="col-md-7">
            <img class="img-responsive" src="{{ $i->logo }}" alt="">
        </div>
        <div class="col-md-5">
            <h6>
                <strong>Телефон:</strong>
                <a href='tel:{{ $i->phone }}' class="">{{ $i->phone }}</a>
            </h6>
            <h6>
                <strong>Адресс:</strong>
                {{ $i->address }}
            </h6>
            <h6>
                <strong>Рэйтинг:</strong>
                {{ $i->raiting }}
            </h6>
            <p>{{ $i->note }}</p>
            <a class="btn btn-primary btn-block" href="{{ action("Front\CarWashController@getShow", $i->id) }}">
                Зайти <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
    <hr>
@endforeach

@endsection
