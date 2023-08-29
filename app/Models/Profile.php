<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;



    //habilitamos asignación masiva, si lo ahcemos de la consola nunca mostrara error pero si es de una ruta debe lleva fillable o guarded para que funcione sino muestra error


    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function user(){
        return $this->belongsTo(User::class); // asi debiesemos agregarlo para llamar desde el perfil llave foranea a users llave primaria
    }
}
