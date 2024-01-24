@extends('layouts.plantillabase');

@section('contenido')
<a href="usuarios/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Email</th>
              <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id}}</td>
            <td>{{ $usuario->name}}</td>
            <td>{{ $usuario->email}}</td>
            <td>

            <form action="{{route ('usuarios.destroy',$usuario->id)}}" method="POST">
            <a href="/usuarios/{{ $usuario->id}}/edit" class="btn btn-info">Editar</a>
            <a href="{{ route('usuarios.show1',$usuario->id)}}" class="btn btn-info">Ver</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
