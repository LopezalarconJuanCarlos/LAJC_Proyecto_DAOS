@extends('layout.layout')
@section('content')

    <div class="container">
    <h3>Lista de Usuarios</h3>
    <hr>
    <a class="btn btn-primary" href="{{route('formulario')}}" role="button">Registrar</a>

    <table class="table table-hover">
        <thead class = "table-info">
<tr>
    <td>ID</td>
    <td>Foto (nombre)</td>
    <td>Foto</td>
    <td>Nombre</td>
    <td>Apellido paterno</td>
    <td>Apellido Materno</td>
    <td>Fecha de nacimiento</td>
    <td>Email</td>
    <td>Pass</td>
    <td>Level</td>
    <td>Activo</td>
    <td>Detalles</td>

    <td>Eliminar</td>
    

</tr>
</thead>
    @foreach($usuarios1 as $usuarios)
    <tr>
        <td>{{ $usuarios->id_usuario}}</td>
        <td>{{ $usuarios->foto}}</td>
        <td><img src="{{asset ('archivos/'.$usuarios->foto) }}" style="width:50px;"></td>
        <td>{{ $usuarios->nombre}}</td>
        <td>{{ $usuarios->app}}</td>
        <td>{{ $usuarios->ap}}</td>
        <td>{{ $usuarios->fn}}</td>
        <td>{{ $usuarios->email}}</td>
        <td>{{ $usuarios->pass}}</td>
        <td>
          @if($usuarios->level == 3)<b>Secretario</b>
          @elseif($usuarios->level == 2)<b>Director</b>
          @elseif($usuarios->level == 1)<b>Estudiante</b>
          @else<b>Maestro</b>
          @endif
        </td>
        <td>
        @if($usuarios->activo == 1) <b style="color: #0F0">Activo</b>
        @else <b style="color: #F00">Inactivo</b>
        @endif 
        </td>
        <td><a href="{{route('detalle',['id' => $usuarios->id_usuario])}}"><button type="button" class="btn btn-success">Detalles</button></td>
        <td><a href="{{route('borrar',['id' => $usuarios->id_usuario])}}"><button type="button" class="btn btn-danger">Eliminar</button></td>

    </tr>
    @endforeach
    </table>
    @endsection