<?php

use Illuminate\Support\Facades\Route;
use App\Models\Articulo;
use App\Models\Cliente;

Route::get('/', function () {

    /* Insertar datos en la tabla desde Eloquent
    $articulo = new Articulo;

    $articulo->nombre_articulo = 'Pantalones';
    $articulo->precio = 60;
    $articulo->pais_origen = 'España';
    $articulo->observaciones = 'Lavado a la piedra';
    $articulo-> seccion = 'Confección';

    $articulo->save();*/

    /* Insertar datos con el método Create
    Articulo::create([
        'nombre_articulo'=>'Impresora',
        'precio'=>50,
        'pais_origen'=>'Colombia',
        'observaciones'=>'Nada que decir',
        'seccion'=>'Informática'
    ]);*/

    // Mostrar datos de una tabla desde Eloquent
    $articulos = Articulo::all();

    if($articulos) {
        foreach ($articulos as $articulo) {
            echo $articulo->nombre_articulo . "<br>";
            echo $articulo->precio . "<br>";
            echo $articulo->pais_origen . "<br>";
            echo $articulo->observaciones . "<br>";
            echo $articulo-> seccion . "<br>" . "<br>";
        }
    }

    // Mostrar articulos en la papelera
        echo Articulo::onlyTrashed()->get();

    // Actualizar datos en la tabla desde Eloquent
    /* Actualizar un único artículo
    $articulo = Articulo::find(6);

    $articulo->precio = 90;

    $articulo->save(); */

    // Actualizar varios artículos
    Articulo::where('seccion', 'Menaje')
        ->where('pais_origen', 'España')
        ->update(['precio'=>90]);

    // Eliminar datos en la tabla desde Eloquent
        // Usando la clave primaria
        $articulo = Articulo::find(2);

        if($articulo) {
            $articulo->delete();
        }

        // Con otro parámetro
        Articulo::where('seccion', 'Ferretería')->delete();

    // Borrado permanente
       $borradoPermanente = Articulo::withTrashed()->find(5);

       if($borradoPermanente) {
            $borradoPermanente->forceDelete();
       }

    return view('welcome');
});

Route::get('/cliente/{id}/articulo', function($id) {
    return Cliente::find($id)->articulo;
});

Route::get('/articulo/{id}/cliente', function ($id) {
    return Articulo::find($id)->cliente;
});

Route::get('/articulos/{id}/cliente', function ($id) {
    $articulos = Cliente::find(id: $id)->articulos;

    foreach($articulos as $articulo) {
        echo $articulo->nombre_articulo . "<br>";
    }
});

Route::get('/cliente/{id}/perfil', function($id) {
    $cliente = Cliente::find($id);

    foreach($cliente->perfils as $perfil) {
        return $perfil->nombre;
    }
});

Route::get('/calificaciones', function () {
    $cliente = Cliente::find(1);

    $calificaciones = []; // Crea un array vacío

    foreach ($cliente->calificaciones as $calificacion) {
        $calificaciones[] = $calificacion->calificacion; // Agrega la calificación al array
    }

    return $calificaciones; // Devuelve el array de calificaciones
});
