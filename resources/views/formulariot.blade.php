@extends('layout.layout')
@section('content')
 <div class="container">
    <h2>Añadir tiendas</h2>
    <hr>
   
        <form>
        <thead class = "table-info">
        <button type="submit" class="btn btn-primary">Agregar</button>
        <div class="mb-3">    
              <label for="exampleinputemail" class="form-label">ID de la tienda </label>
              <input type="number" class="form-control mb-3" name="id_tienda" placeholder="Id de la tienda">
              </div>
              <div class="mb-3">    
              <label for="exampleinputemail" class="form-label">Nombre </label>
              <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre de la tienda">
              </div>
              <div class="mb-3">    
              <label for="exampleinputemail" class="form-label">Clave </label>
              <input type="number" class="form-control mb-3" name="clave" placeholder="Clave de la tienda">
              <div class="mb-3">    
              <input type="file" name="imagen1" />
              <input type="submit" name="subir-imagen" value="Enviar imagen" />
              </div>
              </form>

              @endsection
              