@extends('layout.layout')
@section('content')


<head></head>

<body>

   <center>
            <h2>Editar: Tiendas</h2>
            <hr>
            
            <table class="table table-striped-columns">
                    <form action="{{route('salvar', ['id' => $tiendas->id_tienda])}}" method="POST" enctype="multipart/form-data">
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
                                <td>Id tienda: </td>
                                <td>
                                    <input type="number" name="id_tienda" value="{{ $tiendas->id_tienda}}">
                                    @if($errors->first('$id_tienda')) <i>{{ $errors->first('id_tienda')}}</i> @endif
                                </td>
                            </tr>
                            <tr>
                                <td> Nombre: </td>
                                <td>
                                    <input type="text" name="nombre" value="{{ $tiendas->nombre }}">
                                    @if($errors->first('nombre')) <i>{{ $errors-> firts('nombre') }}</i> @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Matricula (clave): </td>
                                <td>
                                    <input type="number" name="clave" value="{{ $tiendas->clave}}">
                                    @if($errors->first('clave')) <i>{{ $errors->first('clave')}}</i> @endif
                                </td>
                            </tr>
                                <td>Foto: </td>
                                <td>
                                    <input type="text" name="foto" value="{{ $tiendas-> foto}}">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="Salvar Registro">
                                    <a href="{{ route('lista_tiendas') }}">
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