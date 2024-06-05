<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Marca
 *
 * @property $id_marca
 * @property $nombre
 * @property $pais
 * @property $created_at
 * @property $updated_at
 *
 * @property Modelo[] $modelos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Marca extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $primaryKey = 'id_marca';
    protected $table = 'marca';

    protected $fillable = ['id_marca', 'nombre', 'pais'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modelos()
    {
        return $this->hasMany(\App\Models\Modelo::class, 'id_marca', 'id_marca');
    }
    
    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class, 'id_modelo', 'id_marca');
    }
    public function mostrarMarcas()
{
    $marcas = Marca::all();
    return view('vista', ['marcas' => $marcas]);
}

}
