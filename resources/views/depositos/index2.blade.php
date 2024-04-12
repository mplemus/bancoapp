@extends('layouts.principal')

@section('hijos')
<h1>Empleado: {{$empleado->nombre}} {{$empleado->apellido}}
</h1>
<h1>Módulo de Depositos Afiliados: {{$afiliado->id}} {{$afiliado->nombre}} {{$afiliado->apellido}}</h1>

<a href="/deposito/create/{{$empleado->codempleado}}/{{$afiliado->codafiliado}}" class="btn btn-primary">Realizar Deposito</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>CodigoAfiliado</th>
            <th>CodigoEmpleado</th>
            <th>Fecha</th>
            <th>Monto</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($depositos as $deposito)
        @if($deposito->codafiliado==$afiliado->codafiliado)
            <tr>
                <th>{{$deposito->id}}</th>
                <th>{{$deposito->codafiliado}}</th>
                <th>{{$deposito->codempleado}}</th>
                <th>{{$deposito->fecha}}</th>
                <th>{{$deposito->monto}}</th>
                <th>
                </th>
            </tr>
            @endif
        @endforeach
    </tbody>
</table>

@endsection