<?php

//Este fichero se ha creado con: ->php artisan make:controller ClienteController --resource.
// Con este comando (--resource) se crean 7 métodos para realizar 7 acciones (index, create, store, show, edit, update, destroy).

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //Mostrar en index.
    public function index()
    {
        return "Listado de todos los clientes";
    }

    //Crear.
    public function create()
    {
        return "Ejecución de un método que crea un cliente";
    }

    //Guardar.
    public function store(Request $request)
    {
        return "Ejecución de un método que guarda un cliente";
    }

    //Mostrar.
    public function show(string $id)
    {
        return "Ejecución de un método que muestra un cliente";
    }

    //Editar.
    public function edit(string $id)
    {
        return "Ejecución de un método que edita un cliente";
    }

    //Actualizar.
    public function update(Request $request, string $id)
    {
        return "Ejecución de un método que actualiza un cliente";
    }

    //Eliminar.
    public function destroy(string $id)
    {
        return "Ejecución de un método que elimina un cliente";
    }
}
