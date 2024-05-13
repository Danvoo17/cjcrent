<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelo extends Model
{
    use HasFactory;

    protected $table = 'modelo';

    protected $primaryKey = 'id_modelo';

    protected $fillable = [
        'nombre', 'trim', 'año', 'id_marca'
    ];

    // Relación con la marca
    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca');
    }
}
