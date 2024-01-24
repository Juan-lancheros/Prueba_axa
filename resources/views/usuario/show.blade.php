@extends('layouts.plantillabase');

@section('contenido')
<h2>VER USUARIOS</h2>

<form action="/usuarios/{{$usuario->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" value="{{$usuario->name}}" readonly>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input id="email" name="email" type="text" class="form-control" value="{{$usuario->email}}" readonly>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Contraseña</label>
        <input id="password" name="password" type="text" class="form-control" value="{{$usuario->password}}" readonly>
    </div>
    <a href="/usuarios" class="btn btn-secondary">Volver</a>
</form> 
@endsection