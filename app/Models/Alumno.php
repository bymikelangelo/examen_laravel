<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'age',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
}
