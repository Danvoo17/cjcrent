<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seguro extends Model
{
    use HasFactory;

    protected $table = 'seguro';

    protected $primaryKey = 'id_seguro';

    protected $fillable = [
        'num_poliza', 'tipo', 'descripcion', 'fecha_inicio', 'fecha_fin', 'costo', 'id_aseg'
    ];

    // Relación con la aseguradora
    public function aseguradora()
    {
        return $this->belongsTo(Aseguradora::class, 'id_aseg');
    }
}
