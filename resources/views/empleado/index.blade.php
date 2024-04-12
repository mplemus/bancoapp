@extends('layouts.principal')

@section('hijos')

<h1>Modulo de Empleados</h1>
<a href="empleado/create" class="btn btn-primary">Crear Nuveo Empleado</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Codigo Empleado</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Nivel</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
            <tr>
                <th>{{$empleado->id}}</th>
                <th>{{$empleado->codempleado}}</th>
                <th>{{$empleado->nombre}}</th>
                <th>{{$empleado->apellido}}</th>
                <th>{{$empleado->nivel}}</th>
                <th>{{$empleado->telefono}}</th>
                <th>
                    <form action="empleado/{{$empleado->id}}" method="POST">
                        <a href="empleado/{{$empleado->id}}/edit" class="btn btn-info">Editar</a>
                        <a href="afiliado/{{$empleado->id}}" class="btn btn-success">Afiliados</a>
                        @csrf
                        @method('Delete')
                        <button type="Submit" class="btn btn-warning">Eliminar</button>
                    </form>
                    <!-- <button type="submit" class="btn btn-warning">Eliminar</button> -->
                </th>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection