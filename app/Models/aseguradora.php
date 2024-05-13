<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aseguradora extends Model
{
    use HasFactory;

    protected $table = 'aseguradora';

    protected $primaryKey = 'id_aseg';

    protected $fillable = [
        'nombre', 'telefono', 'email', 'direccion'
    ];
}
