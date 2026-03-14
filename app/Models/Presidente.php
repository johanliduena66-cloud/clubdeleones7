<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Presidente extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $table = 'presidentes';

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