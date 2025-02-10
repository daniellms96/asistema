<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //Acceso a datos.
use App\Models\HasFactory;
use App\Models\Producto;


class ProductoController extends Controller {
    
    //Muestra todos los productos ✔.
    public function index(){
        //(con DB (sin modelo))$productos = DB::select('SELECT * FROM productos WHERE precio > 25');
        $productos = Producto::all(); //Accedemos a los datos desde el modelo.

        return view('producto.index', ['lista' => $productos]);
    }

    //Muestra un solo producto ✔.
    public function show($id){
        $producto = Producto::find($id);

        return view('producto.show', ['producto' => $producto]);
    }

    //Llama a un formulario en /create y desde ahí mandamos los datos por POST al método llamada store() ✔.
    public function create(){
        return view('producto.create');
    }

    //Guarda en la base de datos ✔.
    public function store(Request $request) {
    $producto = new Producto();

    // Asignación de los valores recibidos del formulario
    $producto->codigo = $request->input('codigo', '1234567890'); // Código por defecto si no se pasa
    $producto->descripcion = $request->input('descripcion');
    $producto->precio = $request->input('precio');
    $producto->existencia = $request->input('existencias', 0); // Definir existencias por defecto
    $producto->activo = $request->input('activo', 1); // Activo por defecto

    // Guardar en la base de datos.
    $producto->save();

    //Redirigiendo a la vista index.
    return redirect('/productos');

}


    //Llama a vista para editar y mandamos los datos a update() ✔.
    public function edit($id){
        $producto = Producto::find($id);

        return view('producto.edit', ['producto' => $producto]);
    }

    //Recibe una petición HTTP y un id como parámetos y actualiza en la base de datos ✔.
    public function update(Request $request, $id) {
    // Buscar el producto por ID
    $producto = Producto::find($id);

    // Asignación de los valores recibidos del formulario
    $producto->codigo = $request->input('codigo');
    $producto->descripcion = $request->input('descripcion');
    $producto->precio = $request->input('precio');
    $producto->existencia = $request->input('existencias');

    // Guardar los cambios en la base de datos
    $producto->save();

    // Redirigir a la vista index
    return redirect('/productos');
    }


    //Elimina un registro de la base de datos en base al id pasado ✔.
    public function destroy($id){
        $producto = Producto::find($id);

        if ($producto) {
            $producto->delete();
            return redirect('/productos');
        } else {
            return redirect('/productos');
        }
    }
}
