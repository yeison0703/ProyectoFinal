<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $table = 'perfils'; // Nombre de la tabla en la BD

    protected $fillable = [
        'nombre',
    ];
}