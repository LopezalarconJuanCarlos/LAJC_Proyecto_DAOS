@extends('layout.layout')
@section('content')
    <div class="container">
    <h3>Lista de Tipos</h3>
    <hr>
    <table class="table table-hover">
        <thead class = "table-info">
<tr>
    <td>ID tipos</td>
    <td>Nombre</td>
    <td>Detalles</td>
    <td>Activo</td>
    <td>Detalles</td>
    <td>Editar</td>
  
 

</tr>
</thead>
    @foreach($tipos1 as $tipos)
    <tr>
        <td>{{ $tipos->id_tipos}}</td>
        <td>{{ $tipos->nombre}}</td>
        <td>{{ $tipos->detalle}}</td>
        <td>
        @if($tipos->activo == 1) <b style="color: #0F0">Activo</b>
        @else <b style="color: #F00">Inactivo</b>
        @endif    
        </td>
        <td><a href="{{route('detalletipos',['id' => $tipos->id_tipos])}}"><button type="button" class="btn btn-success">Detalles</button></td>
        <td><a href="#"><button type="button" class="btn btn-warning">Editar</button></td>



    </tr>
    @endforeach
    </table>
@endsection