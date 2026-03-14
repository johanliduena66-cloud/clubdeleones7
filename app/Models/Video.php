<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $table = 'videos';

    protected $fillable = [
    'id',
    'descripcion',
    'ano',
    'deleted_at'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
