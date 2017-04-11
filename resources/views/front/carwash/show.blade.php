@extends('front.layout')
@section('title', $title)

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">{{ $title }}</h3>
    </div>
</div>

<div class="row">
    <div class="col-md-7">
        <img class="img-responsive" src="{{ $car_wash->logo }}" alt="">
    </div>
    <div class="col-md-5">
        <h6>
            <strong>Телефон:</strong>
            <a href='tel:{{ $car_wash->phone }}' class="">{{ $car_wash->phone }}</a>
        </h6>
        <h6>
            <strong>Адресс:</strong>
            {{ $car_wash->address }}
        </h6>
        <h6>
            <strong>Рэйтинг:</strong>
            {{ $car_wash->raiting }}
        </h6>
        <p>{{ $car_wash->note }}</p>
        <a class="btn btn-primary btn-block" href="tel:{{ $car_wash->phone }}">
            Позвонить
        </a>
    </div>
    @if ($car_wash->relPrice)
        <div class="col-md-12">
            <table class="table table-bordered" style="    margin-top: 15px;">
                <tr>
                    <th style="font-size: 70%; padding: 3px; text-align: center;">Кузов/Салон</th>
                    <th style="font-size: 70%; padding: 3px; text-align: center;">Кузов</th>
                    <th style="font-size: 70%; padding: 3px; text-align: center;">Салон</th>
                    <th style="font-size: 70%; padding: 3px; text-align: center;">Багаж.</th>
                </tr>

                <tr>
                    <td colspan="4" style="text-align: center; font-weight: 600;">Цены за легковую</td>
                </td>
                <tr>
                    <td>{{ $car_wash->relPrice->price_small }}</td>
                    <td>{{ $car_wash->relPrice->price_small_1 }}</td>
                    <td>{{ $car_wash->relPrice->price_small_2 }}</td>
                    <td>{{ $car_wash->relPrice->price_small_3 }}</td>
                </tr>

                <tr>
                    <td colspan="4" style="text-align: center; font-weight: 600;">Цены за кроссовер</td>
                </td>
                <tr>
                    <td>{{ $car_wash->relPrice->price_mega }}</td>
                    <td>{{ $car_wash->relPrice->price_mega_1 }}</td>
                    <td>{{ $car_wash->relPrice->price_mega_2 }}</td>
                    <td>{{ $car_wash->relPrice->price_mega_3 }}</td>
                </tr>

                <tr>
                    <td colspan="4" style="text-align: center; font-weight: 600;">Цены за внедорожник</td>
                </td>
                <tr>
                    <td>{{ $car_wash->relPrice->price_big }}</td>
                    <td>{{ $car_wash->relPrice->price_big_1 }}</td>
                    <td>{{ $car_wash->relPrice->price_big_2 }}</td>
                    <td>{{ $car_wash->relPrice->price_big_3 }}</td>
                </tr>
            </table>
        </div>
    @endif
</div>

<br />
<div class="row">
    <div class="col-md-5 col-sm-5 col-xs-5">
        <a class="btn btn-info btn-block" href="#review" data-toggle="modal" data-target="#modal_review">
            Отзыв
        </a>
    </div>
    <div class="col-md-2 col-sm-2 col-xs-2">

    </div>
    <div class="col-md-5 col-sm-5 col-xs-5">
        <a class="btn btn-info btn-block" href="#reserve" data-toggle="modal" data-target="#modal_reserve">
            Бронь
        </a>
    </div>
</div>
<hr />

<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Отзывы</h4>
    </div>
</div>
@foreach ($reviews as $r)
    <div class='row'>
        <div class="col-md-6 col-sm-6 col-xs-6">
            {{ $r->name }}
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6" style="text-align: right;">
            <strong>Рэйтинг:</strong> {{ $r->raiting }}
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <p style="  font-style: italic;
                        border-top: 1px solid #337ab7;
                        margin-top: 5px;
                        padding-top: 5px;">
                {{ $r->note }}
            </p>
        </div>
    </div>
    <hr />

@endforeach


<!-- Modal -->
<div class="modal fade" id="modal_review" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ action("Front\CarWashController@postReview", $car_wash->id) }}" method="post"  >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Отзыв</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Ваше имя</label>
                        <input type="text" name='name' class="form-control" placeholder="Наименование" required="">
                    </div>
                    <div class="form-group">
                        <label>Рэйтинг</label> <br />
                        <input type="radio" name="raiting"  value="1" checked=""> 1
                        <input type="radio" name="raiting"  value="2" > 2
                        <input type="radio" name="raiting"  value="3" > 3
                        <input type="radio" name="raiting"  value="4" > 4
                        <input type="radio" name="raiting"  value="5" > 5
                    </div>
                    <div class="form-group">
                        <label for="note">Отзыв</label>
                        <textarea name='note' class='form-control'  placeholder="Отзыв" required=""></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_reserve" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ action("Front\CarWashController@postReserve", $car_wash->id) }}" method="post"  >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Отзыв</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Ваше имя</label>
                        <input type="text" name='name' class="form-control" placeholder="Наименование" required="">
                    </div>
                    <div class="form-group">
                        <label>Ваш телефон</label>
                        <input type="text" name='phone' class="form-control" placeholder="Наименование" required="">
                    </div>
                    <div class="form-group">
                        <label for="note">Комментарий</label>
                        <textarea name='note' class='form-control'  placeholder="Отзыв" required=""></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>
</div>



@endsection
