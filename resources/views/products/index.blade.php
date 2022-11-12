@extends('layout/main')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Наименование</th>
            <th scope="col">Цена</th>
            <th scope="col">Наличие</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td><a href="{{ route("order-view", ["id"=> $product->id])}}">{{ $product->id }}</a></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
                <td><a href="{{ route("product-view", ["id"=> $product->id])}}">Просмотр</a></td>
                <td><a href="{{ route("product-edit", ["id"=> $product->id])}}">Редактировать</a></td>
                <td><a href="{{ route("product-delete", ["id"=> $product->id])}}">Удалить</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

