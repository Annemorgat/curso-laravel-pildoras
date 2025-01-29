@extends('layouts.base')

@section('cabecera')
    <h1>Insertar productos</h1>
@endsection
@section('content')
    <form method="POST" action="{{ route('insertProduct') }}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" value="Examinar">
        <table>
            <tr>
                <td>
                    Nombre:
                </td>
                <td>
                    <input type="text" name="nombre_producto">
                </td>
            </tr>
            <tr>
                <td>
                    Sección:
                </td>
                <td>
                    <input type="text" name="seccion">
                </td>
            </tr>
            <tr>
                <td>
                    País de origen:
                </td>
                <td>
                    <input type="text" name="pais_origen">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="enviar" value="Enviar">
                </td>
                <td>
                    <input type="reset" name="borrar" value="Borrar">
                </td>
            </tr>
        </table>
    </form>
@endsection
@section('pie')
@endsection
