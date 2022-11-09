@extends('layout.layout')
@section('content')

<html>
    <head></head>
    <body>
        <center>
            <h2>Detalles: Productos</h2>
            <hr>
            <div class="container">
            <table class="table table-striped-columns">
            <td><b>ID:</b> {{ $detallep->id_producto}} <br></td>
            <td><b>clave: </b>{{ $detallep->clave}}<br></td>
            <td><b>Nombre: </b>{{ $detallep->nombre}}</td>
            <td><b>Cantidad: </b>{{ $detallep->cantidad}}</td>
            <td><b>Costo: </b>{{ $detallep->costo}}</td>
            <td><b>ID Tipo: </b>{{ $detallep->id_tipo}}</td>
            <td><b>ID Tienda: </b>{{ $detallep->id_tienda}}</td>
            <td><b>Estado: </b>{{ $detallep->activo}}</td>
            <td><b><img src="{{ asset ('archivos/' .$detallep->foto)}}" style="width:50px"></br>
            </table>
            <hr>
            <a href="{{route('lista_productos') }}"<button type="button" class="btn btn-info">Regresar</button></a>        </center>
    </body>
</html>
@endsection
