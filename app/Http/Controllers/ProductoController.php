<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('welcome', ['productos' => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create-product');
    }

    /**
     * Insertar un producto en BBDD
     */
    public function store(Request $request)
    {
       /*$producto = new Producto();
        $producto->nombre_producto = $request->nombre_producto;
        $producto->seccion = $request->seccion;
        $producto->pais_origen = $request->pais_origen;
        $producto->save();*/

        $entrada = $request->all();

        if($archivo = $request->file('file')) {
            $nombre = $archivo->getClientOriginalName();
            $archivo->move('images', $nombre);
            $entrada['image_url']= $nombre;
        }

        Producto::create($entrada);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Producto::findOrFail($id);
        return view('show-product', ['producto'=> $producto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Producto::findOrFail($id);
        return view('edit-product', ['producto'=> $producto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return view('update-product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
    }
}
