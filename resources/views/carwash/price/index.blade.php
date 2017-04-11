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
                <label for="price_small">Цена за легковую, Кузов</label>
                <input type="number" name='price_small_1' class="form-control" required="" value="{{ $price->price_small_1 }}">
            </div>
            <div class="form-group">
                <label for="price_small">Цена за легковую, Салон</label>
                <input type="number" name='price_small_2' class="form-control" required="" value="{{ $price->price_small_2 }}">
            </div>
            <div class="form-group">
                <label for="price_small">Цена за легковую, Багажник</label>
                <input type="number" name='price_small_3' class="form-control" required="" value="{{ $price->price_small_3 }}">
            </div>

            <div class="form-group">
                <label for="price_mega">Цена за кроссовер</label>
                <input type="number" name='price_mega' class="form-control" required="" value="{{ $price->price_mega }}">
            </div>
            <div class="form-group">
                <label for="price_mega">Цена за кроссовер, Кузов</label>
                <input type="number" name='price_mega_1' class="form-control" required="" value="{{ $price->price_mega_1 }}">
            </div>
            <div class="form-group">
                <label for="price_mega">Цена за кроссовер, Салон</label>
                <input type="number" name='price_mega_2' class="form-control" required="" value="{{ $price->price_mega_2 }}">
            </div>
            <div class="form-group">
                <label for="price_mega">Цена за кроссовер, Багажник</label>
                <input type="number" name='price_mega_3' class="form-control" required="" value="{{ $price->price_mega_3 }}">
            </div>

            <div class="form-group">
                <label for="price_big">Цена за внедорожник</label>
                <input type="number" name='price_big' class="form-control" required="" value="{{ $price->price_big }}">
            </div>
            <div class="form-group">
                <label for="price_big">Цена за внедорожник, Кузов</label>
                <input type="number" name='price_big_1' class="form-control" required="" value="{{ $price->price_big_1 }}">
            </div>
            <div class="form-group">
                <label for="price_big">Цена за внедорожник, Салон</label>
                <input type="number" name='price_big_2' class="form-control" required="" value="{{ $price->price_big_2 }}">
            </div>
            <div class="form-group">
                <label for="price_big">Цена за внедорожник, Багажник</label>
                <input type="number" name='price_big_3' class="form-control" required="" value="{{ $price->price_big_3 }}">
            </div>

            <button type="submit" class="btn btn-success btn-lg btn-block">Зарегистрироваться</button>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </div>
</div>

@endsection
