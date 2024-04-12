@extends('layouts.principal')

@section('hijos')
<h1>Crear Retiro</h1>

<div class="container">
<div class="row">
<div class="col">
<form action="/retiro" method="post">
    @csrf
    <div class="mb-3">
    <label for="">Codigo Empleado</label>
    <input type="text" name="codempleado" class="form-control" value="{{$id}}" readonly onmousedown="return false;>
    </div>

    <div class="mb-3">
    <label for="">Codigo Afiliado</label>
    <input type="text" name="codafiliado"  class="form-control" value="{{$id2}}" readonly onmousedown="return false;>
    </div>

    <div class="mb-3">
    <label for="">Fecha</label>
    <input type="date" name="fecha"  class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Monto</label>
    <input type="num" name="monto"  class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Guardar</button>
</form>

</div>
</div>
</div>

@endsection