@extends('layout/main')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col">Имя заказчика</div>
            <div class="col">{{ $order->customer }}</div>
        </div>
        <div class="row">
            <div class="col">Телефон заказчика</div>
            <div class="col">{{ $order->phone }}</div>
        </div>
        <div class="row">
            <div class="col">Дата и время заказа</div>
            <div class="col">{{ $order->created_at }}</div>
        </div>
        <div class="row">
            <div class="col">Тип</div>
            <div class="col">{{ $order->type }}</div>
        </div>
        <div class="row">
            <div class="col">Статус</div>
            <div class="col">{{ $order->status }}</div>
        </div>
    </div>

@endsection
