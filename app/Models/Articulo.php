<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articulo extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $table = 'articulos';

    protected $fillable = [
    'id',
    'codigo',
    'descripcion',
    'cantidad',
    'precio',
    'deleted_at'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
 
    
}