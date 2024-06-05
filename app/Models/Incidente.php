<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Incidente
 *
 * @property $id_incidente
 * @property $descripcion
 * @property $fecha
 * @property $hora
 * @property $id_vehiculo
 * @property $id_cliente
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Vehiculo $vehiculo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Incidente extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = 'incidente';
    protected $primaryKey = 'id_incidente';
    protected $fillable = ['id_incidente', 'descripcion', 'fecha', 'hora', 'id_vehiculo', 'id_cliente'];


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
    

}
