@extends('layout.layout')
@section('content')


<head></head>

<body>

   <center>
            <h2>Editar: Productos</h2>
            <hr>
            
            <table class="table table-striped-columns">
                    <form action="{{route('salvarProductos', ['id' => $productos->id_producto])}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT')}}
                        <table>
                            <tr>
                                <td colspan='2'>
                                    @if(count($errors) >0)
                                    @foreach($errors->all() as $error)
                                    {{ $error }} <br>
                                    @endforeach
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Id del producto: </td>
                                <td>
                                    <input type="number" name="id_producto" value="{{ $productos->id_producto}}">
                                    @if($errors->first('id_producto')) <i>{{ $errors->first('id_producto')}}</i> @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Clave: </td>
                                <td>
                                    <input type="number" name="clave" value="{{ $productos->clave}}">
                                    @if($errors->first('clave')) <i>{{ $errors->first('clave')}}</i> @endif
                                </td>
                            </tr>
                            <tr>
                                <td> Nombre: </td>
                                <td>
                                    <input type="text" name="nombre" value="{{ $productos->nombre }}">
                                    @if($errors->first('nombre')) <i>{{ $errors-> firts('nombre') }}</i> @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Cantidad: </td>
                                <td>
                                    <input type="number" name="cantidad" value="{{ $productos->cantidad }}">
                                    @if($errors->first('cantidad')) <i>{{ $errors-> firts('cantidad') }}</i> @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Costo: </td>
                                <td>
                                    <input type="number" name="costo" value="{{ $productos->costo }}">
                                    @if($errors->first('costo')) <i>{{ $errors-> firts('costo') }}</i> @endif
                                </td>
                            </tr>
                            <tr>
                                <td>ID Tipo: </td>
                                <td>
                                    <input type="number" name="id_tipo" value="{{ $productos->id_tipo }}">
                                    @if($errors->first('id_tipo')) <i>{{ $errors-> firts('id_tipo') }}</i> @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Foto: </td>
                                <td>
                                    <input type="text" name="foto" value="{{ $productos-> foto}}">
                                </td>
                            </tr>
                            <td>Activo: </td>
                            <td>
                                <input type="checkbox" name="activo" value="1" {{ $productos->activo > 0?"checked":''; }}<br>
                            </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="Salvar Registro">
                                    <a href="{{ route('lista_productos') }}">
                                        <button type="button">Regresar</button>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </form>
        </center>
</body>

</html>
@endsection