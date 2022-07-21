<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css
    ">
</head>

<body>
    <form action="{{ route('clientes.update', $cliente) }}" method="post">
        @csrf

        @method('put')


        <div class="mb-3">
            <label for="dni" class="form-label">DNI</label>
            <input id="dni" name="dni" type="text" class="form-control" tabindex="1"
                value="{{ old('dni', $cliente->dni) }}">
        </div>
        @error('dni')
            <small>*{{ $message }}</small>
        @enderror

        <div class="mb-3">
            <label for="nombres" class="form-label">Nombre</label>
            <input id="nombres" name="nombres" type="text" class="form-control" tabindex="2"
                value="{{ old('nombres', $cliente->nombres) }}">
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
                value="{{ old('tiempoEstadia', $cliente->tiempoEstadia) }}">
        </div>
        @error('tiempoEstadia')
            <small>*{{ $message }}</small>
        @enderror

        <a href="{{ route('clientes.index') }}" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-dark">Crear</button>
    </form>
</body>

</html>
