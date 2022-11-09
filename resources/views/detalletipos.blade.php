@extends('layout.layout')
@section('content')

<html>
    <head></head>
    <body>
        <center>
            <h2>Detalles: tipos</h2>
            <hr>
            <div class="container">
            <table class="table table-striped-columns">
            <td><b>ID:</b> {{ $detalletipos->id_tipos}} <br></td>
            <td><b>Nombre: </b>{{ $detalletipos->nombre}}</td>
            <td><b>clave: </b>{{ $detalletipos->detalle}}<br></td>
            <td><b>Estado: </b>{{ $detalletipos->activo}}<br></td>
            </table>
            <hr>
            <a href="{{route('lista_tipos') }}"<button type="button" class="btn btn-info">Regresar</button></a>        </center>
    </body>
</html>
@endsection
