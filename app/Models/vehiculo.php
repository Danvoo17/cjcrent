<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 *
 * @property $id_vehiculo
 * @property $matricula
 * @property $precio
 * @property $año
 * @property $color
 * @property $estado
 * @property $pasajeros
 * @property $puertas
 * @property $maletas
 * @property $tipo
 * @property $traccion
 * @property $transmision
 * @property $motor
 * @property $opciones
 * @property $imagen
 * @property $id_modelo
 * @property $id_seguro
 * @property $created_at
 * @property $updated_at
 *
 * @property Modelo $modelo
 * @property Seguro $seguro
 * @property GastosGenerale[] $gastosGenerales
 * @property Incidente[] $incidentes
 * @property MantenimientoPreventivo[] $mantenimientoPreventivos
 * @property Rentum[] $rentas
 * @property Reparacione[] $reparaciones
 * @property VehiculoPedido[] $vehiculoPedidos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vehiculo extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $primaryKey = 'id_vehiculo'; 
    protected $fillable = ['id_vehiculo', 'matricula', 'precio', 'año', 'color', 'estado', 'pasajeros', 'puertas', 'maletas', 'tipo', 'traccion', 'transmision', 'motor', 'opciones', 'imagen', 'id_modelo', 'id_seguro'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function modelo()
    {
        return $this->belongsTo(\App\Models\Modelo::class, 'id_modelo', 'id_modelo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function seguro()
    {
        return $this->belongsTo(\App\Models\Seguro::class, 'id_seguro', 'id_seguro');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function gastosGenerales()
    {
        return $this->hasMany(\App\Models\GastosGenerale::class, 'id_vehiculo', 'id_vehiculo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function incidentes()
    {
        return $this->hasMany(\App\Models\Incidente::class, 'id_vehiculo', 'id_vehiculo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mantenimientoPreventivos()
    {
        return $this->hasMany(\App\Models\MantenimientoPreventivo::class, 'id_vehiculo', 'id_vehiculo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rentas()
    {
        return $this->hasMany(\App\Models\Rentum::class, 'id_vehiculo', 'id_vehiculo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reparaciones()
    {
        return $this->hasMany(\App\Models\Reparacione::class, 'id_vehiculo', 'id_vehiculo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehiculoPedidos()
    {
        return $this->hasMany(\App\Models\VehiculoPedido::class, 'id_vehiculo', 'id_vehiculo');
    }
    

}
