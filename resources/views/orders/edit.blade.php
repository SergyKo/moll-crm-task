@extends('layout/main')

@section('content')

    <div class="container">
        <form action="{{ route("order-update", $order->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="customer">Имя заказчика</label>
                <input type="text" class="form-control" id="customer" aria-describedby="emailHelp" value="{{ $order->customer }}">
{{--                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
            </div>
            <div class="form-group">
                <label for="phone">Телефон заказчика</label>
                <input type="text" class="form-control" id="phone" aria-describedby="emailHelp" value="{{ $order->phone }}">
{{--                <small id="phone-help" class="form-text text-muted"></small>--}}
            </div>
            <div class="form-group">
                <label for="type">Тип</label>
                <input type="text" class="form-control" id="type" aria-describedby="emailHelp" value="{{ $order->type }}">
{{--                <small id="type-help" class="form-text text-muted"></small>--}}
            </div>
            <div class="form-group">
                <label for="status">Статус</label>
                <input type="text" class="form-control" id="status" aria-describedby="emailHelp" value="{{ $order->status }}">
{{--                <small id="status-help" class="form-text text-muted"></small>--}}
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
