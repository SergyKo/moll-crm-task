@extends('layout/main')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col">Наименование</div>
            <div class="col">{{ $products->name }}</div>
        </div>
        <div class="row">
            <div class="col">Цена</div>
            <div class="col">{{ $products->price }}</div>
        </div>
        <div class="row">
            <div class="col">В наличии, шт. </div>
            <div class="col">{{ $products->stock }}</div>
        </div>
    </div>

@endsection
