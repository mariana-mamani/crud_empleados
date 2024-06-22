@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Empleado</h2>
        <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" value="{{ $empleado->nombre }}" class="form-control" placeholder="Ingrese el nombre">
            </div>
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" name="correo" value="{{ $empleado->correo }}" class="form-control" placeholder="Ingrese el correo">
            </div>
            <div class="form-group">
                <label for="puesto">Puesto:</label>
                <input type="text" name="puesto" value="{{ $empleado->puesto }}" class="form-control" placeholder="Ingrese el puesto">
            </div>
            <div class="form-group">
                <label for="salario">Salario:</label>
                <input type="text" name="salario" value="{{ $empleado->salario }}" class="form-control" placeholder="Ingrese el salario">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
