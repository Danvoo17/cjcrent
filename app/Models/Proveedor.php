<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedor
 *
 * @property $id_proveedor
 * @property $nombre
 * @property $email
 * @property $telefono
 * @property $direccion
 * @property $codigo_postal
 * @property $tipo
 * @property $created_at
 * @property $updated_at
 *
 * @property Pedido[] $pedidos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedor extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */

    protected $primaryKey = 'id_proveedor';
    protected $table = 'proveedor';
    protected $fillable = ['id_proveedor', 'nombre', 'email', 'telefono', 'direccion', 'codigo_postal', 'tipo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany(\App\Models\Pedido::class, 'id_proveedor', 'id_proveedor');
    }
    

}
