@extends('layout/main')

@section('content')

    <div class="container">
        <form action="{{ route("product-update", $products->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="customer">Наименование</label>
                <input type="text"  name="name"  class="form-control" id="name" aria-describedby="emailHelp" value="{{ $products->name }}">
{{--                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
            </div>
            <div class="form-group">
                <label for="price">Цена</label>
                <input type="text" class="form-control" name="price"  id="price" aria-describedby="emailHelp" value="{{ $products->price }}">
{{--                <small id="phone-help" class="form-text text-muted"></small>--}}
            </div>
            <div class="form-group">
                <label for="stock">В наличии</label>
                <input type="text" class="form-control" name="stock" id="stock" aria-describedby="emailHelp" value="{{ $products->stock }}">
{{--                <small id="type-help" class="form-text text-muted"></small>--}}
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
