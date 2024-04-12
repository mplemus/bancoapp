@extends('layouts.principal')

@section('hijos')

<h1>Editar Empleado</h1>
<div class="container">
<div class="row">
<div class="col">
<form action="/empleado/{{$edit->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
    <label for="txtid">ID</label>
    <input type="text" name="id" id="id" value="{{$edit->id}}" class="form-control" readonly onmousedown="return false;>
    </div>

    <div class="mb-3">
    <label for="txtid">Codigo Empleado</label>
    <input type="text" name="codempleado" id="codempleado" value="{{$edit->codempleado}}" class="form-control" readonly onmousedown="return false;>
    </div>

    <div class="mb-3">
    <label for="txtnombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{$edit->nombre}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="txtapellido">Apellido</label>
    <input type="text" name="apellido" id="apellido" value="{{$edit->apellido}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="txtid">Nivel</label>
    <input type="text" name="nivel" id="nivel" value="{{$edit->nivel}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="txttelefono">Telefono</label>
    <input type="text" name="telefono" id="telefono" value="{{$edit->telefono}}" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Guardar Cambios</button>
</form>

</div>
</div>
</div>
@endsection