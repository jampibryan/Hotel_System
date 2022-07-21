<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <h1 class=" flex justify-center text-4xl italic mb-8">TABLA DE REGISTROS DE CLIENTES</h1>
    <a class="w-16 bg-blue-400 py-2 px-4 italic text-2xl" href="{{ route('clientes.create') }}">Registrar
        Cliente</a>

    <div class="container flex justify-center">
        <table class="bg-blue-400 border-8 border-double border-red-400">
            <thead>
                <tr>
                    <th class="border text-center px-8 py-2 italic text-2xl">Id</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">DNI</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">NOMBRES</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">TIPO DE HABITACIÓN</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">TIEMPO DE ESTADÍA</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">MONTO</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">ACCIONES</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        {{-- <td class="border border-red-400 text-center px-4 py-2 italic text-base">{{ $postulante->id }}
                        </td> --}}
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{ $cliente->id }}
                        </td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{ $cliente->dni }}
                        </td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">
                            {{ $cliente->nombres }}</td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">
                            {{ $cliente->tipoHabitacion }}</td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">
                            {{ $cliente->tiempoEstadia }}</td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white"> 450</td>

                        <td class="border text-center px-4 py-2 italic text-base">
                            <a href="{{ route('clientes.edit', $cliente) }}" class="bg-red-400 p-2">Editar</a>
                            <form action="{{ route('clientes.destroy', $cliente) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="bg-black p-2 text-white">Eliminar</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>




</body>

</html>
