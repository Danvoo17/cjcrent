<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class renta extends Model
{
    use HasFactory;

    protected $table = 'renta';

    protected $primaryKey = 'id_renta';

    protected $fillable = [
        'ub_recogida', 'ub_devuelta', 'fecha_recogida', 'hora_recogida', 'fecha_devuelta', 'hora_devuelta', 'costo', 'estado', 'id_vehiculo', 'id_cliente'
    ];

    // Relación con el vehículo
    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class, 'id_vehiculo');
    }

    // Relación con el cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }
}
