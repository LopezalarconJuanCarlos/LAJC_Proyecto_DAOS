<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Models\Tipos;

class UsuariosController extends Controller
{
    public function Usuarios()
    {
        $usuarios_a = Usuarios::all();
        $usuarios_b = \DB::select('SELECT usu.id_usuario as id_usuario, usu.nombre as nombre, usu.app as app,
        usu.ap as ap, usu.fn as fn, usu.gen as gen, usu.foto as foto, usu.email as email,
        usu.pass as pass, usu.activo as activo, niv.nombre as nivel
        FROM tb_usuarios as usu, tb_tipos as niv
        WHERE usu.level=niv.id_tipos');
        return view("vista")
            ->with(['usuarios1' => $usuarios_a])
            ->with(['usuarios2' => $usuarios_b]);
    }

    public function detalle($id)
    {
        $usuarios_a = Usuarios::find($id);
        return view("detalle")
            ->with(['detalle' => $usuarios_a]);
    }
    public function borrar(usuarios $id){
        $id -> delete ();
        return redirect () -> route('lista_usuarios');
    }

    //------------------------------ALTA----------------------------------------------------------------------------
    public function altaUsuarios()
    {
        $tipos = Tipos::all();
        return view("registraru")
            ->with(['tipos' => $tipos]);
    }
    //-----------------------------REGISTRAR--------------------------------------------------------------------------
    public function registrar(Request $request)
    {   
        //dd($request->all());
   //----------------------------------VALIDACION DE CAMPOS (REQUERIDOS)---------------------------------------------
       $this->validate($request, [
            'clave' => 'required',
            'nombre' => 'required',
            'app' => 'required',
            'ap' => 'required',
            'fn' => 'required',
            'email' => 'required',
            'pass' => 'required'
        ]); 

        //Usuarios:: create($request->only('clave','nombre','app', 'ap','fn','gen','foto','email','pass','nivel'))
        Usuarios::create(array(
            'clave' => $request->input('clave'),
            'nombre' => $request->input('nombre'),
            'app' => $request->input('app'),
            'ap' => $request->input('ap'),
            'fn' => $request->input('fn'),
            'gen' => $request->input('gen'),
            'foto' => $request->input('foto'),
            'email' => $request->input('email'),
            'pass' => $request->input('pass'),
            'level' => '1',
            'activo' => '1'
        ));

        return redirect()->route('lista_usuarios');
    } 

    //--------------------------Editar----------------------------------------------------------------------------------
    public function editar(Usuarios $id)
    {
        $usuarios_a = Tipos::all();

        return view("editar")
            ->with(['usuario' => $id])
            ->with(['tipos' => $usuarios_a]);
    }

    public function salvar(Usuarios $id, Request $request)
    {
        //$id->update($request->only('clave','nombre','app','fn','gen','foto','email','pass','nivel','activo'))
        //dd($request->all());
        $query = Usuarios::find($id->id_usuario);
        $query->clave = $request->clave;
        $query->nombre = trim($request->nombre);
        $query->app = trim($request->app);
        $query->ap = trim($request->ap);
        $query->fn = $request->fn;
        $query->gen = $request->gen;
        $query->foto = trim($request->foto);
        $query->email = trim($request->email);
        $query->pass = trim($request->pass);
        $query->level = $request->nivel;


        $query->save();
        return redirect()->route("editar", ['id' => $id->id_usuario]);
    }
}