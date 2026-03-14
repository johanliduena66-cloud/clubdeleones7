<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Actividad extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $table = 'actividades';

    protected $fillable = [
    'id',
    'titulo',
    'descripcion',
    'imagen',
    'deleted_at'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
 
    
}