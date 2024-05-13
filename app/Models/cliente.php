<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';

    protected $primaryKey = 'id_cliente';

    protected $fillable = [
        'nombre', 'apellido', 'fecha_nac', 'telefono', 'email', 'cedula', 'licencia', 'id_user'
    ];

    // Relación con el usuario
    public function user()
    {
    return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
