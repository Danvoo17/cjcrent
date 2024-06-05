<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id_emp
 * @property $nombre
 * @property $apellido
 * @property $telefono
 * @property $cedula
 * @property $email
 * @property $direccion
 * @property $saldo
 * @property $id_cargo
 * @property $id_user
 * @property $created_at
 * @property $updated_at
 *
 * @property Cargo $cargo
 * @property User $user
 * @property Reparacione[] $reparaciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $primaryKey = 'id_emp';
    protected $fillable = ['id_emp', 'nombre', 'apellido', 'telefono', 'cedula', 'email', 'direccion', 'saldo', 'id_cargo', 'id_user'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cargo()
    {
        return $this->belongsTo(\App\Models\Cargo::class, 'id_cargo', 'id_cargo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'id_user', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reparaciones()
    {
        return $this->hasMany(\App\Models\Reparacione::class, 'id_emp', 'id_emp');
    }
    

}
