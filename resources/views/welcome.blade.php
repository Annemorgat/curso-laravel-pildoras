@extends('layouts.base')

@section('cabecera')
    <h1>Welcome</h1>
@endsection
@section('content')
    @if($productos)
        <table border="1">
            <thead>
                <th>Nombre del producto</th>
                <th>Sección</th>
                <th>País de origen</th>
                <th>Imagen</th>
            </thead>
            @foreach ($productos as $producto)
                <tr>
                    <td>
                        <a href="{{ route('editProduct', ['id'=> $producto->id]) }}">
                            {{$producto->nombre_producto}}
                        </a>
                    </td>
                    <td>
                        {{$producto->seccion}}
                    </td>
                    <td>
                        {{$producto->pais_origen}}
                    </td>
                    <td>
                        <img src="/images/{{ $producto->image_url }}" width="20px" height="20px">
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection
@section('pie')
@endsection
