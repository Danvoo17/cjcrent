<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Aseguradora
 *
 * @property $id_aseg
 * @property $nombre
 * @property $telefono
 * @property $email
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @property Seguro[] $seguros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Aseguradora extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */

    protected $primaryKey = 'id_aseg';

    protected $fillable = ['id_aseg', 'nombre', 'telefono', 'email', 'direccion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function seguros()
    {
        return $this->hasMany(\App\Models\Seguro::class, 'id_aseg', 'id_aseg');
    }
    

}
