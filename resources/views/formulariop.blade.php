@extends('layout.layout')
@section('content')
 <div class="container">
    <h2>Añadir Productos</h2>
    <hr>
    <button type="submit" class="btn btn-primary">Agregar</button>
    <form>
        <thead class = "table-info">
              <div class="mb-3">    
              <label for="exampleinputemail" class="form-label">ID </label>
              <input type="number" class="form-control mb-3" name="id_producto" placeholder="Id del producto">
              </div>
              <div class="mb-3">    
              <label for="exampleinputemail" class="form-label">clave </label>
              <input type="number" class="form-control mb-3" name="clave" placeholder="Clave del producto">
              </div>
              <div class="mb-3">    
              <label for="exampleinputemail" class="form-label">Nombre </label>
              <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre del producto">
              </div>
              <div class="mb-3">    
              <label for="exampleinputemail" class="form-label">Cantidad </label>
              <input type="number" class="form-control mb-3" name="cantidad" placeholder="Cantidad">
              <div class="mb-3">    
              <label for="exampleinputemail" class="form-label">Costo</label>
              <input type="number" class="form-control mb-3" name="costo" placeholder="Costo del producto">
              </div>
              <div class="mb-3">    
              <label for="exampleinputemail" class="form-label">ID del Tipo </label>
              <input type="number" class="form-control mb-3" name="id_tipos" placeholder="Id del tipo">
              </div>
              <div class="mb-3">    
              <label for="exampleinputemail" class="form-label">ID de la tienda</label>
              <input type="number" class="form-control mb-3" name="id_tienda" placeholder="Id de la tienda">
              </div>
              <div class="mb-3">    
              <input type="file" name="imagen1" />
              <input type="submit" name="subir-imagen" value="Enviar imagen" />
              </div>
              </form>

              @endsection
              