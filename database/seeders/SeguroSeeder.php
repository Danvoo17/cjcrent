<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeguroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aseguradoras = [
            [
                'nombre' => 'Seguros pedro',
                'telefono' => '849-244-2222',
                'email' => 'sepedro@gmail.com',
                'direccion' => 'avenida xd, santiago',
                'created_at' => '2024-05-13 03:51:56',
                'updated_at' => '2024-05-13 03:51:57',
            ],
        ];

        $seguros = [
            [
                'num_poliza' => '66856565',
                'tipo' => 'total',
                'descripcion' => 'seguro contra todo tipo de daño o eventos',
                'fecha_inicio' => '2024-05-12',
                'fecha_fin' => '2024-05-16',
                'costo' => 3000.00,
                'id_aseg' => 1,
                'created_at' => '2024-05-13 03:54:25',
                'updated_at' => '2024-05-13 03:54:26',
            ],
        ];

        DB::table('aseguradoras')->insert($aseguradoras);
        DB::table('seguro')->insert($seguros);
    }
}
