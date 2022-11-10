@extends('adminlte::page')

@section('title', 'Editar registros')

@section('content_header')
    <h1>EDITAR REGISTROS</h1>
@stop

@section('content')

<form action="/contacts/{{$contact->id}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="name" name="name" type="text" class="form-control" value="{{$contact->name}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Primer apellido</label>
    <input id="first_last_name" name="first_last_name" type="text" class="form-control" value="{{$contact->first_last_name}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Segundo apellido</label>
    <input id="second_last_name" name="second_last_name" type="text" class="form-control" value="{{$contact->second_last_name}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Número de Teléfono</label>
    <input id="phone_number" name="phone_number" type="text" class="form-control" value="{{$contact->phone_number}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input id="email" name="email" type="text" class="form-control" value="{{$contact->email}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Género</label>
    <input id="gender" name="gender" type="text" class="form-control" value="{{$contact->gender}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha de nacimiento</label>
    <input id="birth_date" name="birth_date" type="date" class="form-control" value="{{$contact->birth_date}}">
  </div>
  <a href="/contacts" class="btn btn-secondary" >Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
