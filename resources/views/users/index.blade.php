@extends('layout/main')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Имя пользователя</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td><a href="{{ route("user-view", ["id"=> $user->id])}}">{{ $user->id }}</a></td>
                <td>{{ $user->name }}</td>
                <td><a href="{{ route("user-view", ["id"=> $user->id])}}">Просмотр</a></td>
                <td><a href="{{ route("user-edit", ["id"=> $user->id])}}">Редактировать</a></td>
                <td>
                    <form method="post" action="{{ route('user-delete', $user->id) }}">
                    @csrf
                    @method('DELETE')
                        <input type="submit" name="submit" value="Удалить">
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

