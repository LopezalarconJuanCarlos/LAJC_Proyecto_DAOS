<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Tipos;

class ProductosController extends Controller
{
    public function Productos()
    {
        $productos_a = Producto::all();
        $productos_b = \DB::select('SELECT * FROM tb_productos');
        return view ("vistap")
            ->with(['productos1'=> $productos_a])
            ->with(['productos2'=> $productos_b]);


    }

    public function detallep($id)
    {
        $productos_a = Producto::find($id);
        return view("detallep")
            ->with(['detallep' => $productos_a]);
    }

//--------------------------Editar----------------------------------------------------------------------------------
public function editarProducto(Producto $id){
    $productos_a = Tipos:: all();
    
    return view("editarProductos")
    ->with(['productos'=> $id])
    ->with(['tipos'=> $productos_a]);
}

public function salvarProductos(Producto $id, Request $request ){
    //$id->update($request->only('clave','nombre','app','fn','gen','foto','email','pass','nivel','activo'))
    //dd($request->all());
    $query = Producto::find($id->id_producto);
    $query->nombre = trim($request->nombre);
    $query->cantidad = trim($request->cantidad);
    $query->costo = trim($request->costo);
    $query->id_tipo = trim($request->id_tipo) ;
    $query->id_tienda = trim($request->id_tienda);
    $query->clave = $request->clave;
    
 

    $query-> save();
    return redirect()->route("editarProducto", [$id->$id_producto]);
}

//------------------------------------Borrar productos---------------------------------------------
public function borrarp(producto $id){
    $id -> delete ();
    return redirect () -> route('lista_productos');
}


}
