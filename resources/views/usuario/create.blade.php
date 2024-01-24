@extends('layouts.plantillabase');

@section('contenido')

<h2>CREAR USUARIOS</h2>

<form action="/usuarios" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" tabindex="1" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input id="email" name="email" type="text" class="form-control" tabindex="2" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Contraseña</label>
        <input id="password" name="password" type="text" class="form-control" tabindex="3" required>
    </div>
    <a href="/usuarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection