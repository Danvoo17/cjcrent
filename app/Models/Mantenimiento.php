<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mantenimiento
 *
 * @property $id_mantenimiento
 * @property $tipo
 * @property $descripcion
 * @property $fecha
 * @property $costo
 * @property $id_vehiculo
 * @property $created_at
 * @property $updated_at
 *
 * @property Vehiculo $vehiculo
 * @property GastosGenerale[] $gastosGenerales
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mantenimiento extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */

    protected $table = 'mantenimiento';

    protected $primaryKey = 'id_mantenimiento';

    protected $fillable = ['id_mantenimiento', 'tipo', 'descripcion', 'fecha', 'costo', 'id_vehiculo'];


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
        return $this->hasMany(\App\Models\GastosGenerale::class, 'id_mantenimiento', 'id_mantenimiento');
    }
    

}
