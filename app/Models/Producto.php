<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'tb_productos';
    protected $primaryKey = "id_producto";
    protected $fillable = [
      'foto',
      'clave',
      'nombre',
      'cantidad',
      'costo',
      'id_tipo',
      'id_tienda',
      'activo'
    ];
}
