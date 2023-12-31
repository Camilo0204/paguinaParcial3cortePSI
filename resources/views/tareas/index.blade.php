@extends('layouts.base')
@section('titulo', 'REGISTRO DE SALIDAS')
@section('botonera')

    <a href="{{ route('tareas.create') }}" class="btn btn-primary">Registrar Salida</a>

@endsection

@section('contenido')

    <div class="tabla-lista">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Hora</td>
                    <td>Fecha</td>
                    <td>Nombre de Cliente</td>
                    <td>Estado</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($tareas as $tarea)
                    <tr>
                        <td>
                            {{ $tarea->id }}
                        </td>
                        <td>
                            {{ $tarea->titulo }}
                        </td>
                        <td>
                            {{ $tarea->descripcion }}
                        </td>
                        <td>
                            {{ $tarea->proyecto->nombre }}
                        </td>
                        <td>
                            {{ $tarea->estado }}
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('tareas.edit',['tarea'=>$tarea->id]) }}" class="btn btn-warning" style="margin-left: 10px">Editar</a>
                                <a href="{{ route('tareas.delete',['tarea'=>$tarea->id]) }}" class="btn btn-danger" style="margin-left: 10px">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
