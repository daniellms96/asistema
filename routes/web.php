<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});

//Definición de una ruta HTTP que devuelve una vista.
Route::get('/saluda', function () {
    return view('saluda');
});

Route::get('/despedida', function () {
    return view('despedida');
});

//Parámetro pasado.
Route::get('/pique', function () {
    return view('pique', ['texto' => 'Esto es un mensaje de prueba']);
});

//Productos:
//Con variable en la URL. 
//Route::get('/productos/{prod}', function ($prod) {
//    return view('producto', ['prod' => $prod]);
//});


//No devuelve una vista.
Route::get('/clientes/{id}/venta/{idVenta}', function ($id, $idVenta = null) {

    if ($idVenta == null) {
        return "Has cometido un error";
    }

    return "El cliente $id realizó la venta $idVenta";

});


//Ya con controllers (desuso).
//Asociamos una ruta a un método del controller.
//Route::get('/productos', [ProductoController::class, "index"]);

//Route::get('/productos/{producto}', function ($producto) {
//    return "Detalle del producto $producto";
//});


//Rutas que ya invocan a un método del controller que invoca a una vista.

//Clientes.
Route::resource('/clientes', ClienteController::class);

//Productos. El orden es importante.
Route::get('productos/create', [ProductoController::class, 'create']);
Route::get('productos', [ProductoController::class, 'index']);
Route::get('productos/{producto}', [ProductoController::class, 'show']);
Route::post('productos', [ProductoController::class, 'store']);
Route::get('productos/{id}/edit', [ProductoController::class, 'edit']);
Route::put('productos/{id}', [ProductoController::class, 'update']);
Route::delete('productos/{id}', [ProductoController::class, 'destroy']);