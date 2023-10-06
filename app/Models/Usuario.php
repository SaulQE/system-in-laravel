<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //permite vincular el modelo a una fábrica de modelos para las instancias.
    use HasFactory;
    protected $table="usuarios"; //en referencia a la tabla usuarios.
    protected $primaryKey="usuario_id"; //en referencia a la clave primaria usuario_id.
    public $timestamps=false; //indica que no actualice automáticamente los campos created_at y updated_at.
}
