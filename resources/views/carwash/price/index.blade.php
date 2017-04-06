@extends('carwash.layout')
@section('title', $title)

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">{{ $title }}</h3>
    </div>
</div>

<div class='row'>
    <div class="col-lg-12">
        <form action="{{ action("Carwash\PriceController@postSave") }}" method="post" enctype='multipart/form-data' >
            <div class="form-group">
                <label for="price_small">Цена за легковую</label>
                <input type="number" name='price_small' class="form-control" required="" value="{{ $price->price_small }}">
            </div>
            <div class="form-group">
                <label for="price_mega">Цена за кроссовер</label>
                <input type="number" name='price_mega' class="form-control" required="" value="{{ $price->price_mega }}">
            </div>
            <div class="form-group">
                <label for="price_big">Цена за внедорожник</label>
                <input type="number" name='price_big' class="form-control" required="" value="{{ $price->price_big }}">
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block">Зарегистрироваться</button>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </div>
</div>

@endsection
