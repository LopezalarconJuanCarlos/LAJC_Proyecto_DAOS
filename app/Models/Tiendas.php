<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiendas extends Model
{
    use HasFactory;
    protected $table ='tb_tiendas';
    protected $primarykey = 'id_tienda';
    protected $fillable = [
        'clave',
        'nombre',
        'foto'
    ];
}
