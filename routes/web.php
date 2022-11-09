<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\TiendasController;
use App\Http\Controllers\TiposController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () { return view('welcome');});
//Route::name('base')->get('base', function(){return view('base');});


//----------------------------------------RUTAS: USUARIOS-----------------------------
Route::name('lista_usuarios')-> get ('/',[UsuariosController::class, 'usuarios']);
Route::name('formulario')->get('formulario',[UsuariosController::class, 'altaUsuarios']);
Route::name('detalle')->get('detalle/{id}',[UsuariosController::class, 'detalle']);
Route::name('editar')->get('editar/{id}',[UsuariosController::class, 'editar']);
Route::name('salvar')->put('salvar/{id}',[UsuariosController::class, 'salvar']);
Route::name('borrar')->delete('borrar/{id}', [UsuariosController::class, 'borrar']);
Route::name('borrar')->get('borrar/{id}', [UsuariosController::class, 'borrar']);
Route::name('registrar')->post('registrar',[UsuariosController::class, 'registrar']);

//--------------------------------------------RUTAS:PRODUCTOS-----------------------------
Route::name('lista_productos')->get('productos',[ProductosController::class, 'Productos']);
Route::name('lista_tiendas')->get('tiendas',[TiendasController::class, 'Tiendas']);
Route::name('detallep')->get('detallep/{id}',[ProductosController::class, 'detallep']);
Route::name('borrarp')->delete('borrarp/{id}', [ProductosController::class, 'borrarp']);
Route::name('borrarp')->get('borrarp/{id}', [ProductosController::class, 'borrarp']);
Route::name('editarProducto')->get('editarProductos/{id}',[ProductosController::class, 'editarProducto']);
Route::name('salvarProductos')->put('salvarProductos/{id}',[ProductosController::class, 'salvarProductos']);

//--------------------------------------------RUTAS:TIPOS-----------------------------
Route::name('lista_tipos')->get('tipos',[TiposController::class, 'Tipos']);
Route::name('formulariotipos')->get('formulariotipos',[TiposController::class, 'altaTipos']);
Route::name('detalletipos')->get('detalletipos/{id}',[TiposController::class, 'detalletipos']);

//----------------------------------------RUTAS: TIENDAS-----------------------------------
Route::name('formulariot')->get('formulariot',[TiendasController::class, 'altaTiendas']);
Route::name('editart')->get('editart/{id}',[TiendasController::class, 'editart']);
Route::name('salvart')->put('salvart/{id}',[TiendasController::class, 'salvart']);
Route::name('detallet')->get('detallet/{id}',[TiendasController::class, 'detallet']);




