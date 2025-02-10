@extends('layout/template')
@section('title', 'Nuevo Producto')
@section('content')

<body>
    <h1>Detalles del producto con código: {{$producto->codigo}}.</h1>
    <ul>
        <li>Código: {{ $producto->codigo }}</li>
        <li>Descripción: {{ $producto->descripcion }}</li>
        <li>Precio: {{ $producto->precio }}</li>
        <li>Existencias: {{ $producto->existencia }}</li>
    </ul>
</body>
</html>

@endsection
