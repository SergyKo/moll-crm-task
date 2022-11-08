@extends('layout/main')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Имя заказчика</th>
            <th scope="col">Телефон заказчика</th>
            <th scope="col">Дата и время заказа</th>
            <th scope="col">Тип</th>
            <th scope="col">Статус</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($orders as $order)
            <tr>
                <td><a href="{{ route("order-view", ["id"=> $order->id])}}">{{ $order->id }}</a></td>
                <td>{{ $order->customer }}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->created_at }}</td>
                <td>{{ $order->type }}</td>
                <td>{{ $order->status }}</td>
                <td><a href="{{ route("order-view", ["id"=> $order->id])}}">Просмотр</a></td>
                <td><a href="{{ route("order-edit", ["id"=> $order->id])}}">Редактировать</a></td>
                <td><a href="{{ route("order-delete", ["id"=> $order->id])}}">Удалить</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

