@extends('adminlte::page')

@section('title', 'listado de contactos')

@section('content_header')
    <h1>Listado de contactos</h1>
@stop

@section('content')
@include('contacts.modal.create')

<button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#createModal">CREAR</button>

<table id="contacts" class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Primer apellido</th>
            <th>Segundo apellido</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{$contact->name}}</td>
            <td>{{$contact->first_last_name}}</td>
            <td>{{$contact->second_last_name}}</td>
            <td>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailsModal{{$contact->id}}">Detalles</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{$contact->id}}">Editar</button>
                <form method="POST" action="{{route('contacts.destroy', $contact->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>

@foreach ($contacts as $contact)
@include('contacts.modal.details')
@include('contacts.modal.edit')
@endforeach

<a href="/export/contacts" class="btn btn-secondary">Descargar Listado</a>

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script> $(document).ready(function () {
        $('#contacts').DataTable();
    });
    </script>

@endsection
@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop


