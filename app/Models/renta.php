<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Renta
 *
 * @property $id_renta
 * @property $ub_recogida
 * @property $ub_devuelta
 * @property $fecha_recogida
 * @property $hora_recogida
 * @property $fecha_devuelta
 * @property $hora_devuelta
 * @property $costo
 * @property $estado
 * @property $id_vehiculo
 * @property $id_cliente
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Vehiculo $vehiculo
 * @property Factura[] $facturas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Renta extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = 'renta';

    protected $primaryKey = 'id_renta';
    
    protected $fillable = ['id_renta', 'ub_recogida', 'ub_devuelta', 'fecha_recogida', 'hora_recogida', 'fecha_devuelta', 'hora_devuelta', 'costo', 'estado', 'id_vehiculo', 'id_cliente'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cliente()
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'id_cliente', 'id_cliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vehiculo()
    {
        return $this->belongsTo(\App\Models\Vehiculo::class, 'id_vehiculo', 'id_vehiculo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturas()
    {
        return $this->hasMany(\App\Models\Factura::class, 'id_renta', 'id_renta');
    }
    

}
