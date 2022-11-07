@extends('layout/main')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col">Имя пользователя</div>
            <div class="col">{{ $user->name }}</div>
        </div>
        <div class="row">
            <div class="col">ID пользователя</div>
            <div class="col">{{ $user->id }}</div>
        </div>
    </div>

@endsection
