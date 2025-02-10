@extends('layout/template')
@section('title', 'Nuevo Producto')
@section('content')

<form action="{{ url('/productos') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="codigo" class="form-label">Código</label>
        <input type="text" name="codigo" id="codigo" class="form-control">
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" name="precio" id="precio" class="form-control">
    </div>
    <div class="mb-3">
        <label for="existencias" class="form-label">Existencias</label>
        <input type="number" name="existencias" id="existencias" class="form-control">
    </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
