<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reparacione
 *
 * @property $id_reparacion
 * @property $descripcion
 * @property $fecha
 * @property $costo
 * @property $id_vehiculo
 * @property $id_emp
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleado $empleado
 * @property Vehiculo $vehiculo
 * @property GastosGenerale[] $gastosGenerales
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reparacione extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = 'reparaciones';
    protected $primaryKey = 'id_reparacion';
    protected $fillable = ['id_reparacion', 'descripcion', 'fecha', 'costo', 'id_vehiculo', 'id_emp'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empleado()
    {
        return $this->belongsTo(\App\Models\Empleado::class, 'id_emp', 'id_emp');
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
    public function gastosGenerales()
    {
        return $this->hasMany(\App\Models\GastosGenerale::class, 'id_reparacion', 'id_reparacion');
    }
    

}
