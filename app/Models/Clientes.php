<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    protected $filelabel = ['nombres', 'correo', 'telefono', 'direccion', 'ciudad', 'provincia', 'pais', 'preferencia_propiedad', 'estado'];
}
