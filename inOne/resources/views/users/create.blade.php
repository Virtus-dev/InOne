@extends('adminlte::page')

@section('title', 'Crear registros')

@section('content_header')
    <h1>CREAR REGISTROS</h1>
@stop

@section('content')

    <form action="/users" method="POST">
        @csrf
      <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" tabindex="1">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input id="email" name="email" type="text" class="form-control" tabindex="2">
      </div>
      <a href="/users" class="btn btn-secondary" tabindex="4">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

