@extends('layout.layout')
@section('content')


<head></head>

<body>

   <center>
            <h2>Editar: Usuarios</h2>
            <hr>
            
            <table class="table table-striped-columns">
                    <form action="{{route('salvar', ['id' => $usuario->id_usuario])}}" method="POST" enctype="multipart/form-data">
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
                                <td>Matricula (clave): </td>
                                <td>
                                    <input type="number" name="clave" value="{{ $usuario->clave}}">
                                    @if($errors->first('clave')) <i>{{ $errors->first('clave')}}</i> @endif
                                </td>
                            </tr>
                            <tr>
                                <td> Nombre: </td>
                                <td>
                                    <input type="text" name="nombre" value="{{ $usuario->nombre }}">
                                    @if($errors->first('nombre')) <i>{{ $errors-> firts('nombre') }}</i> @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Apellido Paterno: </td>
                                <td>
                                    <input type="text" name="app" value="{{ $usuario->app }}">
                                    @if($errors->first('app')) <i>{{ $errors-> firts('app') }}</i> @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Apellido Materno: </td>
                                <td>
                                    <input type="text" name="ap" value="{{ $usuario->ap }}">
                                    @if($errors->first('ap')) <i>{{ $errors-> firts('ap') }}</i> @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Fecha de nacimietno: </td>
                                <td>
                                    <input type="date" name="fn" value="{{ $usuario->fn }}">
                                    @if($errors->first('fn')) <i>{{ $errors-> firts('fn') }}</i> @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Genero: </td>
                                <td>
                                    Femenino: <input type="radio" name="gen" value="F" {{ $usuario-> gen == "F"?"checked":'';}}<hr>
                                    Masculino: <input type="radio" name="gen" value="M" {{ $usuario-> gen == "M"?"checked":'';}} </td>
                            </tr>
                            <tr>
                                <td>Foto: </td>
                                <td>
                                    <input type="text" name="foto" value="{{ $usuario-> foto}}">
                                </td>
                            </tr>
                            <tr>
                                <td>Email: </td>
                                <td>
                                    <input type="text" name="email" value="{{ $usuario->email }}">
                                    @if($errors->first('email')) <i>{{ $errors-> firts('email') }}</i> @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Niveñ/acceso/rol: </td>
                                <td>
                                    <select name="nivel" id="">
                                        @foreach($tipos as $tipo)
                                        <option value="{{$tipo->id_tipos}}">{{$tipo->nombre}}</option>
                                        @endforeach

                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Contraseña: </td>
                                <td>
                                    <input type="text" name="pass" value="{{ $usuario->pass }}">
                                    @if($errors->first('pass')) <i>{{ $errors-> firts('pass') }}</i> @endif
                                </td>
                            </tr>
                            <td>Activo: </td>
                            <td>
                                <input type="checkbox" name="activo" value="1" {{ $usuario->activo > 0?"checked":''; }}<br>
                            </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="Salvar Registro">
                                    <a href="{{ route('lista_usuarios') }}">
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