<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GastosLocal
 *
 * @property $id_gasto
 * @property $descripcion
 * @property $fecha
 * @property $costo
 * @property $created_at
 * @property $updated_at
 *
 * @property GastosGenerale[] $gastosGenerales
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class GastosLocal extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */

    Protected $table = 'gastos_local';

    protected $primaryKey = 'id_gasto';

    protected $fillable = ['id_gasto', 'descripcion', 'fecha', 'costo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function gastosGenerales()
    {
        return $this->hasMany(\App\Models\GastosGenerale::class, 'id_gasto', 'id_gastloc');
    }
    

}
