@extends('layout.layout')
@section('content')

<html>
    <head></head>
    <body>
        <center>
            <h2>Detalles: Tiendas</h2>
            <hr>
            <div class="container">
            <table class="table table-striped-columns">
            <td><b>ID:</b> {{ $detallet->id_tienda}} <br></td>
            <td><b>Nombre: </b>{{ $detallet->nombre}}</td>
            <td><b>clave: </b>{{ $detallet->clave}}<br></td>
            <td><b><img src="{{ asset ('archivos/' .$detallet->foto)}}" style="width:50px"></br>
            </table>
            <hr>
            <a href="{{route('lista_tiendas') }}"<button type="button" class="btn btn-info">Regresar</button></a>        </center>
    </body>
</html>
@endsection
