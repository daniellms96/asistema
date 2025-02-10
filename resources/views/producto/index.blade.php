<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 20px 0 50px 0;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid black;
        }
        form {
            display: inline;
        }
        a, button {
            padding: 5px 10px;
            margin: 0 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Catálogo de Productos</h1>

    <!-- Botón para crear un nuevo producto -->
     <form action="{{ url('productos/create') }}" method="get">
        <button type="submit">Crear Producto</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Existencia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lista as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->codigo }}</td>
                    <td>{{ $item->descripcion }}</td>
                    <td>{{ $item->precio }}</td>
                    <td>{{ $item->existencia }}</td>
                    <td>
                        <!-- Formulario de eliminar -->
                        <form action="{{ url('productos/' . $item->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Eliminar</button>
                        </form>
                        <!-- Formulario para ver -->
                        <form action="{{ url('productos/' . $item->id) }}" method="get">
                            <button type="submit">Ver</button>
                        </form>
                        <!-- Formulario para editar -->
                        <form action="{{ url('productos/' . $item->id . '/edit') }}" method="get">
                            <button type="submit">Editar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
