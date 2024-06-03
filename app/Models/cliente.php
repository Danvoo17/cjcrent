<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id_cliente
 * @property $nombre
 * @property $apellido
 * @property $fecha_nac
 * @property $telefono
 * @property $cedula
 * @property $licencia
 * @property $id_user
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @property DetalleFactura[] $detalleFacturas
 * @property Incidente[] $incidentes
 * @property Mensaje[] $mensajes
 * @property Rentum[] $rentas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */

    protected $primaryKey = 'id_cliente';

    protected $fillable = ['id_cliente', 'nombre', 'apellido', 'fecha_nac', 'telefono', 'cedula', 'licencia', 'id_user'];


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
    public function detalleFacturas()
    {
        return $this->hasMany(\App\Models\DetalleFactura::class, 'id_cliente', 'id_cliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function incidentes()
    {
        return $this->hasMany(\App\Models\Incidente::class, 'id_cliente', 'id_cliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mensajes()
    {
        return $this->hasMany(\App\Models\Mensaje::class, 'id_cliente', 'id_cliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rentas()
    {
        return $this->hasMany(\App\Models\Rentum::class, 'id_cliente', 'id_cliente');
    }
    

}
