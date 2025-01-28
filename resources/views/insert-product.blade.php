@extends('layouts.base')

@section('cabecera')
@endsection
@section('content')
    <form method="post">
        <input type="text" name="NombreArticulo">
        <input type="submit" name="Enviar" value="Enviar">
    </form>
@endsection
@section('pie')
@endsection
