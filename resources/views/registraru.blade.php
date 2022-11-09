@extends('layout.layout')
@section('content')
<html>

<head></head>

<body>
    <center>
        <h2>Usuarios: Alta</h2>
        <hr>
        <form action="{{ route('registrar') }}" method="POST" enctype="multipart/form-data">    
            {{ csrf_field()}}
            <table>
                <tr>
                    <td colspan="2">
                        @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                        {{ $error }} <br>
                        @endforeach
                        @endif
                    </td>
                </tr>
                <tr>
                    <td> Matricula (clave): </td>
                    <td>
                        <input type="text" name="clave" value="{{old('clave')}}">
                        @if($errors->first('clave')) <i>{{ $errors->first('clave')}}</i> @endif
                    </td>
                </tr>
                <tr>
                    <td>Nombre: </td>
                    <td>
                        <input type="text" name="nombre" value="{{old ('nombre')}}">
                        @if($errors->first('clave')) <i>{{ $errors->first('clave') }}</i>@endif
                    </td>
                </tr>
                <tr>
                    <td>Apellido Paterno:</td>
                    <td>
                        <input type="text" name="app" value="{{old('app')}}">
                        @if($errors->first('app')) <i>{{ $errors->first('app')}}</i>@endif
                    </td>
                </tr>
                <tr>
                    <td>Apellido Materno:</td>
                    <td>
                        <input type="text" name="ap" value="{{old('ap')}}">
                        @if($errors->first('ap')) <i>{{ $errors->first('ap')}}</i>@endif
                    </td>
                </tr>
                <tr>
                    <td>Fecha de nacimiento: </td>
                    <td>
                        <input type="date" name="fn" value="{{ old('fn')}}">
                        @if($errors->first('fin')) <i>{{ $errors->first('fn') }}</i> @endif
                    </td>
                </tr>
                <tr>
                    <td>Genero:</td>
                    <td>
                        Femenino: <input type="radio" name="gen" value="F" checked><br>
                        Masculino: <input type="radio" name="gen" value="M" checked><br>
                    </td>
                </tr>
                <tr>
                    <td>Foto: </td>
                    <td>
                        <input type="text" name="foto" value="{{ old('foto') }}">
                    </td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td>
                        <input type="text" name="email" value="{{ old('email')}}">
                        @if($errors->first('email')) <i>{{ $erros->first('email') }}</i>@endif
                    </td>
                </tr>
                <tr>
                    <td>Contraseña: </td>
                    <td>
                        <input type="text" name="pass" value="{{ old('pass')}}">
                        @if($errors->first('pass')) <i>{{ $erros->first('pass') }}</i>@endif
                    </td>
                </tr>
                <tr>
                    <label for="level" class="from label">Nivel/Acceso/Roll</label>
                    <select name="level" class="form-select">
                        @foreach($tipos as $level) @endforeach
                        <option value="{{ $level->id_tipos}}">{{ $level->id_tipos.' - '. $level->detalle}} </option> 
                    </select>
                </tr>
                    
                
            </table>
        <hr>
                    <div class="col-6 text-center">
                        <button type="submit" class="btn" style="background-color: blue">Registrar</button>
                    </div>
                    <div clas= "col-6 text-center">
                        <a class="btn" style="background-color: blue" href="{{ route('lista_usuarios')}}" role="button" >Regresar</a>
                    </div>
                
            </form>
    </center>
</body>

</html>

@endsection