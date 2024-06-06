<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 *
 * @property $cod_factura
 * @property $metodo_pago
 * @property $fecha
 * @property $descripcion
 * @property $itbis
 * @property $descuentos
 * @property $monto_total
 * @property $id_renta
 * @property $created_at
 * @property $updated_at
 *
 * @property Renta $renta
 * @property DetalleFactura[] $detalleFacturas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Factura extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */

     protected $table = 'factura';
    protected $primaryKey = 'cod_factura';
    protected $fillable = ['cod_factura', 'metodo_pago', 'fecha', 'descripcion', 'itbis', 'descuentos', 'monto_total', 'id_renta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function renta()
    {
        return $this->belongsTo(\App\Models\Renta::class, 'id_renta', 'id_renta');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleFacturas()
    {
        return $this->hasMany(\App\Models\DetalleFactura::class, 'cod_factura', 'cod_factura');
    }
    

}
