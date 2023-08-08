<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preregistration extends Model
{
    use HasFactory;

    protected $table = 'preregistrations';
    protected $fillable = [
        'fecha_de_inters','nombres','apellidos','tipos_de_documento','numero_de_documento','fecha_de_expedicin_del_documento','ubicacin_del_documento','numero_celular_de_contacto','correo_electrnico','programa_acadmico', 'por_que_le_interesa_esta_programa_acadmico','status'
    ];
}
