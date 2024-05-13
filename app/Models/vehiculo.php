<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiculo extends Model
{
    use HasFactory;

    protected $table = 'vehiculo';

    protected $primaryKey = 'id_vehiculo';

    protected $fillable = [
        'matricula', 'precio', 'color', 'estado', 'traccion', 'transmision', 'motor', 'pasajeros', 'maletas', 'opciones', 'tipo', 'id_modelo', 'id_seguro', 'imagen'
    ];

    // Relación con el modelo
    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'id_modelo');
    }

    // Relación con el seguro
    public function seguro()
    {
        return $this->belongsTo(Seguro::class, 'id_seguro');
    }
}
