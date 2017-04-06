@extends('carwash.layout')
@section('title', $title)

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">{{ $title }}</h3>
    </div>
</div>

@foreach ($items as $i)
    <div class='row'>
        <div class="col-lg-12">
            <h6>
                <strong>Имя:</strong>
                {{ $i->name }}
            </h6>
            <h6>
                <strong>Телефон:</strong>
                {{ $i->phone }}
            </h6>
            <h6>
                <strong>Отправлено:</strong>
                {{ $i->created_at }}
            </h6>
            <p>{{ $i->note }}</p>
        </div>
    </div>
    <hr />
@endforeach

@endsection
