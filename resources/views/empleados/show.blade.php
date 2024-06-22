@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detalles del Empleado</h2>
        <div class="form-group">
            <strong>Nombre:</strong>
            {{ $empleado->nombre }}
        </div>
        <div class="form-group">
            <strong>Correo:</strong>
            {{ $empleado->correo }}
        </div>
        <div class="form-group">
            <strong>Puesto:</strong>
            {{ $empleado->puesto }}
        </div>
        <div class="form-group">
            <strong>Salario:</strong>
            {{ $empleado->salario }}
        </div>
        <a class="btn btn-primary" href="{{ route('empleados.index') }}">Volver</a>
    </div>
@endsection
