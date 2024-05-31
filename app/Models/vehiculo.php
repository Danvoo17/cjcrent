<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiculo extends Model
{
    use HasFactory;

    protected $table = 'vehiculo';

    protected $primaryKey = 'id_vehiculo';

    protected $fillable = [
        'matricula', 'precio', 'color', 'estado', 'traccion', 'transmision', 'motor', 'pasajeros', 'maletas', 'opciones', 'tipo', 'id_modelo', 'id_seguro', 'imagen'
    ];

    // Relación con el modelo
    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'id_modelo');
    }

    // Relación con el seguro
    public function seguro()
    {
        return $this->belongsTo(Seguro::class, 'id_seguro');
    }
    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_modelo', 'id_marca');
    }
    public function filtrar(Request $request)
    {
        $marcaId = $request->input('marca');
    
        // Lógica para filtrar los vehículos por la marca seleccionada
        $vehiculos = Vehiculo::where('marca_id', $marcaId)->get();
    
        // Aquí podrías pasar los vehículos filtrados a una vista para mostrarlos
        return view('resultado_filtro', ['vehiculos' => $vehiculos]);
    }
}
