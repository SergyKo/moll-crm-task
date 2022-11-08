@extends('layout/main')

@section('content')

    <table class="table">
        <tbody>
        <tr>
            <th scope="row">Имя заказчика</th>
            <td>{{ $order->customer }}</td>

        </tr>
        <tr>
            <th scope="row">Телефон заказчика</th>
            <td>{{ $order->phone }}</td>
        </tr>
        <tr>
            <th scope="row">Дата и время заказа</th>
            <td>{{ $order->created_at }}</td>
        </tr>
        <tr>
            <th scope="row">Тип</th>
            <td>{{ $order->type }}</td>
        </tr> <tr>
            <th scope="row">Статус</th>
            <td>{{ $order->status }}</td>
        </tr>
        </tbody>
    </table>

@endsection

