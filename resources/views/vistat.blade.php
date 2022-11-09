@extends('layout.layout')
@section('content')
    <div class="container">
    <h3>Lista de Tiendas</h3>
    <hr>
    <table class="table table-hover">
        <thead class = "table-info">
<tr>
    <td>ID tienda</td>
    <td>Nombre</td>
    <td>clave</td>
    <td>Foto (nombre)</td>
    <td>Foto</td>
    <td>Detalles</td>
    <td>Editar</td>
    <td>Eliminar</td>
  
 

</tr>
</thead>
    @foreach($tiendas1 as $tiendas)
    <tr>
        <td>{{ $tiendas->id_tienda}}</td>
        <td>{{ $tiendas->nombre}}</td>
        <td>{{ $tiendas->clave}}</td>
        <td>{{ $tiendas->foto}}</td>
        <td><img src="{{asset ('archivos/'.$tiendas->foto) }}" style="width:100px;"></td>
        <td><a href="{{route('detallet',['id' => $tiendas->id_tienda])}}"><button type="button" class="btn btn-success">Detalles</button></td>
        <td><a href="{{route('editart', ['id' => $tiendas->id_tienda])}}"><button type="button" class="btn btn-warning">Editar</button></td>
        <td><a href="#"><button type="button" class="btn btn-danger">Eliminar</button></td>


    </tr>
    @endforeach
    </table>
  @endsection