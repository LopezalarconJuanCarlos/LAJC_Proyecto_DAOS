@extends('layout.layout')
@section('content')
<div class="container">
    <h3>Lista de Productos</h3>
    <hr>
    <table class="table table-hover">
        <thead class = "table-info">
<tr>
    <td>ID</td>
    <td>clave</td>
    <td>Nombre</td>
    <td>Cantidad</td>
    <td>Costo</td>
    <td>ID Tipo</td>
    <td>ID tienda</td>
    <td>Activo</td>
    <td>Foto (nombre)</td>
    <td>Foto</td>
    <td>Detalles</td>
    <td>Editar</td>
    <td>Eliminar</td>

</tr>
</thead>
    @foreach($productos1 as $producto)
    <tr>
        <td>{{ $producto->id_producto}}</td>
        <td>{{ $producto->clave}}</td>
        <td>{{ $producto->nombre}}</td>
        <td>{{ $producto->cantidad}}</td>
        <td>{{ $producto->costo}}</td>
        <td>{{ $producto->id_tipo}}</td>
        <td>
          @if($producto->id_tienda == 1001)<b>Walmart</b>
          @elseif($producto->id_tienda == 1002)<b>Bodega Aurrera</b></b>
          @elseif($producto->id_tienda == 1003)<b>Garis</b>
          @elseif($producto->id_tienda == 1004)<b>Chedraui</b>
          @elseif($producto->id_tienda == 1005)<b>Soriana</b>
          @elseif($producto->id_tienda == 1006)<b>Super Kompras</b>
          @elseif($producto->id_tienda == 1007)<b>Tienda 3B</b>
          @elseif($producto->id_tienda == 1008)<b>Cotsco</b>
          @elseif($producto->id_tienda == 1009)<b>Home Depot</b>
          @elseif($producto->id_tienda == 1010)<b>Office Depot</b>
          @elseif($producto->id_tienda == 1011)<b>Coppel</b>
          @elseif($producto->id_tienda == 1012)<b>Waldo's</b>
          @elseif($producto->id_tienda == 1013)<b>Elektra</b>
          @elseif($producto->id_tienda == 1014)<b>Mc'donals</b>
          @elseif($producto->id_tienda == 1015)<b>Burger King</b>
          @elseif($producto->id_tienda == 1016)<b>Carl's Junior</b>
          @elseif($producto->id_tienda == 1017)<b>Starbucks</b>
          @elseif($producto->id_tienda == 1018)<b>Little Caesars</b>
          @elseif($producto->id_tienda == 1019)<b>Pizza Hut</b>
          @else<b>Dominos Pizza</b>
          @endif
        </td>
        <td>
        @if($producto->activo == 1) <b style="color: #0F0">Activo</b>
        @else <b style="color: #F00">Inactivo</b>
        @endif 
        </td>
        <td>{{ $producto->foto}}</td>
        <td><img src="{{asset ('archivos/'.$producto->foto) }}" style="width:50px;"></td>
        <td><a href="{{route('detallep',['id' => $producto->id_producto])}}"><button type="button" class="btn btn-success">Detalles</button></td>
        <td><a href="{{route('editarProducto',['id' => $producto->id_producto])}}"><button type="button" class="btn btn-success">Editar</button></td>
        <td><a href="{{route('borrarp',['id' => $producto->id_producto])}}"><button type="button" class="btn btn-danger">Eliminar</button></td>
    </tr>
    @endforeach
    </table>
   @endsection