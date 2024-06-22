@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Agregar Nuevo Empleado</h2>
        <form action="{{ route('empleados.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre">
            </div>
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" name="correo" class="form-control" placeholder="Ingrese el correo">
            </div>
            <div class="form-group">
                <label for="puesto">Puesto:</label>
                <input type="text" name="puesto" class="form-control" placeholder="Ingrese el puesto">
            </div>
            <div class="form-group">
                <label for="salario">Salario:</label>
                <input type="text" name="salario" class="form-control" placeholder="Ingrese el salario">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection
