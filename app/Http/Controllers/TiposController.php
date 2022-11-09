<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipos;
class TiposController extends Controller
{
    public function Tipos(){
        $tipos_a = Tipos::all();
        $tipos_b = \DB::select('SELECT * FROM tb_tipos');
        return view ("vistatipos")
            ->with(['tipos1'=> $tipos_a])
            ->with(['tipos2'=> $tipos_b]);

    }
    public function detalletipos($id){
        $tipos_a = Tipos::find($id);
        return view("detalletipos")
            ->with(['detalletipos'=> $tipos_a]);
    }

    public function borrar(tipos $id){
        $id -> delete ();
        return redirect () -> route('lista_tipos');
    }

    //------------------------------ALTA----------------------------------------------------------------------------
    public function altaTipos(){
        $tipos_a = Tipos::all();
        return view("formulariotipos")
            ->with(['Tipos'=> $tipos_a]);
    }   
    public function registrar(Request $request){
 //----------------------------------VALIDACION DE CAMPOS (REQUERIDOS)---------------------------------------------
 $this->validate($request,[
    'clave' => 'required',
    'nombre'=> 'required',
    'cantidad' => 'requeried',
    'costo'=> 'requeried',
    'activo'=> 'requeried',
]);

//Usuarios:: create($request->only('clave','nombre','app', 'ap','fn','gen','foto','email','pass','nivel'))
Usuarios::create(array(
    'clave'=>$request->input('clave'),
    'nombre'=>$request->input('nombre'),
    'cantidad'=>$request->input('cantidad'),
    'costo'=>$request->input('costo'),
    'activo'=> '1'
));

return redirect()->route('lista');

}

//--------------------------Editar----------------------------------------------------------------------------------
public function editar(Usuarios $id){
    $nivel = Nivel:: all();
    
    return view("editar")
    ->with(['usuarios'=> $id])
    ->with(['nivel'=> $nivel]);
}

public function salvar(Usuarios $id, Request $request ){
    //$id->update($request->only('clave','nombre','app','fn','gen','foto','email','pass','nivel','activo'))
    //dd($request->all());
    $query = Usuarios::find($id->id_usuairos);
    $query->clave - $request->clave;
    $query->nombre = trim($request->nombre);
    $query->app = trim($request->app);
    $query->ap = trim($request->ap);
    $query->fn = $request->fn ;
    $query->gen = $request->gen;
    $query->foto - trim($request->foto);
    $query->email = trim($request->email);
    $query->pass - trim($request->pass);
    $query->nivel = $request->nivel;


    $query-> save();
    return redirect()->route("editar", [$id->$id_usuario]);
}

}
