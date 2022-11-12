@extends('layout/main')

@section('content')

    <div class="container">
        <form action="{{ route("user-update", $user->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="customer">Имя пользователя</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{ $user->name }}">
                {{--                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
