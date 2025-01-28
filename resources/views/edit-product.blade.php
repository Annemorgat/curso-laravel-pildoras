@extends('layouts.base')

@section('cabecera')
@endsection
@section('content')
    @if($producto)
        <form method="POST" action="{{ route('insertProduct') }}">
            @csrf
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
                        <input type="reset" name="borrar" value="Resetear filtro">
                    </td>
                </tr>
            </table>
        </form>
        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    @endif
@endsection
@section('pie')
@endsection
