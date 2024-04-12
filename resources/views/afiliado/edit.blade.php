@extends('layouts.principal')

@section('hijos')

<h1>Editar Afiliado</h1>
<div class="container">
<div class="row">
<div class="col">
<form action="/afiliado/{{$edit->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
    <label for="txtid">ID</label>
    <input type="text" name="id" id="id" value="{{$edit->id}}" class="form-control" readonly onmousedown="return false;>
    </div>

    <div class="mb-3">
    <label for="txtcodafiliado">Codigo afiliado</label>
    <input type="text" name="codafiliado" id="codafiliado" value="{{$edit->codafiliado}}" class="form-control" readonly onmousedown="return false;>
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
    <label for="txtciudad">Ciudad</label>
    <input type="text" name="ciudad" id="ciudad" value="{{$edit->ciudad}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="txttelefono">Telefono</label>
    <input type="text" name="telefono" id="telefono" value="{{$edit->telefono}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="txtedad">Edad</label>
    <input type="text" name="edad" id="edad" value="{{$edit->edad}}" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Guardar Cambios</button>
</form>

</div>
</div>
</div>
@endsection