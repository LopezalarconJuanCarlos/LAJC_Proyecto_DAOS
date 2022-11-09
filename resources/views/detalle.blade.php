@extends('layout.layout')
@section('content')

<html>
    <head></head>
    <body>
        <center>
            <h2>Detalles: Usuario</h2>
            <hr>
            <div class="container">
            <table class="table table-striped-columns">
            <td><b>ID:</b> {{ $detalle->id_usuario}} <br></td>
            <td><b><img src="{{ asset ('archivos/' .$detalle->foto)}}" style="width:50px"></br>
            <td><b>Nombre: </b>{{ $detalle->app . ' ' . $detalle->ap . ' ' . $detalle->nombre}}</td>
            <td><b>Fecha Nacimiento: </b>{{ $detalle->fn}}<br></td>
            <td><b>Email:</b> {{ $detalle->email}} <br></td>
            <td><b>Contraseña:</b> {{ $detalle->pass}} <br></td>
            <td><b>Nivel:</b> {{ $detalle->level}} <br></td>
            <td><b>Estado:</b> {{ $detalle->activo}} <br></td>
            <td><b>Genero:</b> {{ $detalle->gen}} <br></td>
            <td><b>Email:</b> {{ $detalle->email}} <br></td>
            <td><b>Matricula: </b>{{ $detalle->clave}}<br></td>
            </table>
            <hr>
            <a href="{{route('lista_usuarios') }}"<button type="button" class="btn btn-info">Regresar</button></a>       
            </table>
         </center>
    </body>
</html>
@endsection


