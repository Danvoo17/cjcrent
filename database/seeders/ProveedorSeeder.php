<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proovedors = [
            [
                'id_proveedor' => 1,
                'nombre' => 'Hollman International',
                'email' => 'info@hollmann.international',
                'telefono' => '+49 421 80608210',
                'direccion' => 'Charlotte-Auerbach-Str. 4, Stuhr, Germany',
                'codigo_postal' => '28816',
                'tipo' => 'internacional',
                'created_at' => '2024-06-05 08:58:32',
                'updated_at' => '2024-06-06 04:51:59',
            ],
        ];

        $pedidos = [
            [
                'id_pedido' => 1,
                'descripcion' => '2024 BMW 760i Xdrive',
                'cantidad' => 1,
                'fecha' => '2024-05-12',
                'costo' => 110000,
                'id_proveedor' => 1,
                'created_at' => '2024-06-06 02:58:01',
                'updated_at' => '2024-06-06 02:58:01',
            ],
        ];

        DB::table('proveedor')->insert($proovedors);
        DB::table('pedido')->insert($pedidos);
    }
}
