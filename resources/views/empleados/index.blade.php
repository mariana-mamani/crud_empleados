@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lista de Empleados</h2>
        <a href="{{ route('empleados.create') }}" class="btn btn-primary">Agregar Nuevo Empleado</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-3">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered mt-3">
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Puesto</th>
                <th>Salario</th>
                <th width="280px">Acciones</th>
            </tr>
            @foreach ($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->correo }}</td>
                    <td>{{ $empleado->puesto }}</td>
                    <td>{{ $empleado->salario }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('empleados.show', $empleado->id) }}">Ver</a>
                        <a class="btn btn-primary" href="{{ route('empleados.edit', $empleado->id) }}">Editar</a>
                        <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
