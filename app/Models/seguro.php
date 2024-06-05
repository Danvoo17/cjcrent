<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Seguro
 *
 * @property $id_seguro
 * @property $num_poliza
 * @property $tipo
 * @property $descripcion
 * @property $fecha_inicio
 * @property $fecha_fin
 * @property $costo
 * @property $id_aseg
 * @property $created_at
 * @property $updated_at
 *
 * @property Aseguradora $aseguradora
 * @property Vehiculo[] $vehiculos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Seguro extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $primaryKey = 'id_seguro';
    
    protected $fillable = ['id_seguro', 'num_poliza', 'tipo', 'descripcion', 'fecha_inicio', 'fecha_fin', 'costo', 'id_aseg'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function aseguradora()
    {
        return $this->belongsTo(\App\Models\Aseguradora::class, 'id_aseg', 'id_aseg');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehiculos()
    {
        return $this->hasMany(\App\Models\Vehiculo::class, 'id_seguro', 'id_seguro');
    }
    

}
