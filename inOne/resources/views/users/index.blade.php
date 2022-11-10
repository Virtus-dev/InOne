@extends('adminlte::page')

@section('title', 'listado de usuarios')

@section('content_header')
    <h1>Listado de usuarios</h1>
@stop

@section('content')

<table id="users" class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <form method="POST" action="{{route('users.destroy', $user->id)}}">
                <a class="btn btn-info" href="/users/{{$user->id}}/edit">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script> $(document).ready(function () {
        $('#contacts').DataTable();
    });
    </script>

@endsection
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop
