@extends('layout.layout')
@section('content')
 <div class="container">
    <h2>Añadir Tipos</h2>
    <hr>
    <button type="submit" class="btn btn-primary">Agregar</button>
        <form>
        <thead class = "table-info">
        <div class="mb-3">    
        <label for="exampleinputemail" class="form-label">ID </label>
        <input type="number" class="form-control mb-3" name="id_tipos" placeholder="Nombre de la tienda">
        </div>
        <div class="mb-3">    
        <label for="exampleinputemail" class="form-label">Nombre </label>
        <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre de la tienda">
        </div>
        <div class="mb-3">    
        <label for="exampleinputemail" class="form-label">Detalle</label>
        <input type="text" class="form-control mb-3" name="clave" placeholder="Clave de la tienda">
        </form>

@endsection
            