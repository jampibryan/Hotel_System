@extends('adminlte::page')

@section('title', 'Sistema de Registro')

@section('content_header')
    <h1>Registro de Cliente</h1>
@stop

@section('content')

    <form action="{{ route('clientes.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="dni" class="form-label">DNI</label>
            <input id="dni" name="dni" type="text" class="form-control" tabindex="1" value="{{ old('codigo') }}">
        </div>
        @error('dni')
            <small>*{{ $message }}</small>
        @enderror

        <div class="mb-3">
            <label for="nombres" class="form-label">Nombre</label>
            <input id="nombres" name="nombres" type="text" class="form-control" tabindex="2"
                value="{{ old('nombre') }}">
        </div>
        @error('nombres')
            <small>*{{ $message }}</small>
        @enderror


        <select name="tipoHabitacion" class="form-control">
            <option disabled selected>Tipo de Habitación</option>
            <option value="simple">Simple</option>
            <option value="doble">Doble</option>
        </select>
        <br>

        <div class="mb-3">
            <label for="tiempoEstadia" class="form-label">Tiempo de Estadía(Días)</label>
            <input id="tiempoEstadia" name="tiempoEstadia" type="number" class="form-control" tabindex="2"
                value="{{ old('tiempoEstadia') }}">
        </div>
        @error('tiempoEstadia')
            <small>*{{ $message }}</small>
        @enderror

        <a href="{{ route('clientes.index') }}" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-dark">Crear</button>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
