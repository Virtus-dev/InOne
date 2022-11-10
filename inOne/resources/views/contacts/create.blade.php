@extends('adminlte::page')

@section('title', 'Crear registros')

@section('content_header')
    <h1>CREAR REGISTROS</h1>
@stop

@section('content')

    <form action="/contacts" method="POST">
        @csrf
      <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" tabindex="1" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Primer apellido</label>
        <input id="first_last_name" name="first_last_name" type="text" class="form-control" tabindex="2" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Segundo apellido</label>
        <input id="second_last_name" name="second_last_name" type="text" class="form-control" tabindex="3" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Número de Teléfono</label>
        <input id="phone_number" name="phone_number" type="text" class="form-control" tabindex="4">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input id="email" name="email" type="text" class="form-control" tabindex="5" required>
      </div>
      <label for="" class="form-label">Género</label>
      <div class="mb-3">
        <input id="gender" name="gender" type="radio" class="" value="Masculino" checked tabindex="6" required>
        <label for="" class="form-label">Masculino</label>
      </div>
      <div class="mb-3">
        <input id="gender" name="gender" type="radio" class="" value="Femenino" checked tabindex="7" required>
        <label for="" class="form-label">Femenino</label>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Fecha de nacimiento</label>
        <input id="birth_date" name="birth_date" type="date" class="form-control" tabindex="8" required>
      </div>
      <a href="/contacts" class="btn btn-secondary" tabindex="10">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

