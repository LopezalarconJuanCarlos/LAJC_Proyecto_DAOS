<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiendas;

class TiendasController extends Controller
{
    public function Tiendas(){
        $tiendas_a = Tiendas::all();
        $tiendas_b = \DB::select('SELECT * FROM tb_tiendas');
        return view ("vistat")
            ->with(['tiendas1'=> $tiendas_a])
            ->with(['tiendas2'=> $tiendas_b]);


    }
    public function detallet($id){
        $tiendas_a = Tiendas::find($id);
        return view("detallet")
            ->with(['detallet'=> $tiendas_a]);
    }

    //------------------------------ALTA----------------------------------------------------------------------------
    public function altaTiendas(){
        $tiendas_a = Tiendas::all();
        return view("formulariot")
            ->with(['Tiendas'=> $tiendas_a]);
    }   
    public function registrar(Request $request){
 //----------------------------------VALIDACION DE CAMPOS (REQUERIDOS)---------------------------------------------
 $this->validate($request,[
    'clave' => 'required',
    'nombre'=> 'required',
    'app' => 'requeried',
    'ap'=> 'requeried',
    'fn'=> 'requeried',
    'email'=>'requeried',
    'pass'=>'reuqueried'
]);

//Usuarios:: create($request->only('clave','nombre','app', 'ap','fn','gen','foto','email','pass','nivel'))
Usuarios::create(array(
    'clave'=>$request->input('clave'),
    'nombre'=>$request->input('nombre'),
    'app'=>$request->input('app'),
    'ap'=>$request->input('ap'),
    'fn'=>$request->input('fn'),
    'gen'=>$request->input('gen'),
    'foto'=>$request->input('foto'),
    'email'=>$request->input('email'),
    'pass'=>$request->input('pass'),
    'nivel'=>$request->input('nivel'),
    'activo'=> '1'
));

return redirect()->route('lista');

}

//--------------------------Editar----------------------------------------------------------------------------------
public function editart(Tiendas $id){
    $tiendas_a = Tiendas::all();
    
    return view("editart")
    ->with(['tiendas'=> $id])
    ->with(['tiendas'=> $tiendas_a]);


}

public function salvar(Tiendas $id, Request $request ){
    //$id->update($request->only('clave','nombre','app','fn','gen','foto','email','pass','nivel','activo'))
    //dd($request->all());
    $query = Tiendas::find($id->id_tienda);
    $query->nombre = trim($request->nombre);
    $query->clave - $request->clave;
    $query->foto - trim($request->foto);



    $query-> save();
    return redirect()->route("editart", [$id->$id_tiendas]);
}

}
