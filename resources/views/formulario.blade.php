@extends('layout.layout')
@section('content')
<div class="container">
<h2>Añadir Usuarios</h2>
<hr>
    <button type="submit" class="btn btn-primary">Agregar</button>
<form action="#" method"POST" enctype="multipart/form-data">
    {{csrf_field() }}
        <thead class = "table-info">
              <div class="mb-3">    
              <label for="exampleinputemail" class="form-label">ID del usuario</label>
              <input type="number" class="form-control mb-3" name="id_usuario" placeholder="ID">
              </div>
              <div class="mb-3">    
              <label for="exampleinputemail" class="form-label">Nombre </label>
              <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre del usuario">
              </div>
              <div class="mb-3">    
              <label for="exampleinputemail" class="form-label">Apellido paterno </label>
              <input type="text" class="form-control mb-3" name="apm" placeholder="Apellido paterno">
              </div>
              <div class="mb-3">    
              <label for="exampleinputemail" class="form-label">Apellido materno </label>
              <input type="text" class="form-control mb-3" name="ap" placeholder="Apellido materno">
              </div>
              <div class="mb-3">    
              <label for="exampleinputemail" class="form-label">Fecha de nacimiento </label>
              <input type="text" class="form-control mb-3" name="fn" placeholder="Fecha de nacimieto">
              </div>
              <div class="mb-3">    
              <label for="exampleinputemail" class="form-label">Email </label>
              <input type="email" class="form-control mb-3" name="email" placeholder="Ingrese su correo">
              </div>
              <div class="mb-3">    
              <label for="exampleinputemail" class="form-label">Contraseña </label>
              <input type="text" class="form-control mb-3" name="contraseña" placeholder="Contraseña">
              </div>
              <div class="mb-3">    
              <input type="file" name="imagen1" />
              <input type="submit" name="subir-imagen" value="Enviar imagen" />
              </div>
              </form>

              @endsection
              