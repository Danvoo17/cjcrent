<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedido
 *
 * @property $id_pedido
 * @property $descripcion
 * @property $cantidad
 * @property $fecha
 * @property $costo
 * @property $id_proveedor
 * @property $created_at
 * @property $updated_at
 *
 * @property Proveedor $proveedor
 * @property GastosGenerale[] $gastosGenerales
 * @property VehiculoPedido[] $vehiculoPedidos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pedido extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */

    Protected $table = 'pedido';

    protected $primaryKey = 'id_pedido';

    protected $fillable = ['id_pedido', 'descripcion', 'cantidad', 'fecha', 'costo', 'id_proveedor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proveedor()
    {
        return $this->belongsTo(\App\Models\Proveedor::class, 'id_proveedor', 'id_proveedor');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function gastosGenerales()
    {
        return $this->hasMany(\App\Models\GastosGenerale::class, 'id_pedido', 'id_pedido');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehiculoPedidos()
    {
        return $this->hasMany(\App\Models\VehiculoPedido::class, 'id_pedido', 'id_pedido');
    }
    

}
