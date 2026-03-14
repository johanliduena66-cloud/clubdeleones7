<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Galeria extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $table = 'galerias';

    protected $fillable = [
    'id',
    'nombre',
    'imagen',
    'ano',
    'deleted_at'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
 
    
}