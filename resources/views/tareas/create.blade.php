@extends('layouts.base')
@section('titulo',"Crear una nueva tarea")
@section("botonera")
<a href="{{ route('tareas.index') }}" class="btn btn-success">Regresar a Salidas</a>
@endsection

@section('contenido')

<form action="{{ route('tareas.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="titulo" class="form-label">Hora</label>
        <input type="text" class="form-control" id="titulo" name="titulo">
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Fecha</label>
        <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
    </div>
    <div class="mb-3">
        <label for="proyecto_id" class="form-label">Propietario</label>
        <select name="proyecto_id" id="proyecto_id" class="form-control" required>
            <option value="">--Seleccione--</option>
            @foreach ($proyectos as $proyecto)
                <option value="{{ $proyecto->id }}">{{ $proyecto->nombre }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="estado" class="form-label">Estado</label>
        <select name="estado" id="estado" class="form-control" required>
            <option value="pendiente">pago Pendiente</option>
            <option value="iniciada">pago Cancelado</option>
            <option value="terminada">Pago en Espera</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Crear</button>
</form>

@endsection
