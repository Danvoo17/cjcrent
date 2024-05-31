<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marcas = [
            [
                'nombre' => 'Ford',
                'pais' => 'EEUU',
                'created_at' => '2024-05-13 03:48:01',
                'updated_at' => '2024-05-13 03:48:02',
            ],
            [
                'nombre' => 'Hyundai',
                'pais' => 'Corea del sur',
                'created_at' => '2024-05-13 03:48:43',
                'updated_at' => '2024-05-13 03:48:44',
            ],
            [
                'nombre' => 'Chevrolet',
                'pais' => 'EEUU',
                'created_at' => '2024-05-26 21:53:39',
                'updated_at' => '2024-05-26 21:53:39',
            ],
            [
                'nombre' => 'BMW',
                'pais' => 'Alemania',
                'created_at' => '2024-05-26 21:53:39',
                'updated_at' => '2024-05-26 21:53:39',
            ],
            [
                'nombre' => 'Mercedes-Benz',
                'pais' => 'Alemania',
                'created_at' => '2024-05-26 21:53:39',
                'updated_at' => '2024-05-26 21:53:39',
            ],
            [
                'nombre' => 'Kia',
                'pais' => 'Corea del Sur',
                'created_at' => '2024-05-26 21:53:39',
                'updated_at' => '2024-05-26 21:53:39',
            ],
            [
                'nombre' => 'Nissan',
                'pais' => 'Japón',
                'created_at' => '2024-05-26 21:53:39',
                'updated_at' => '2024-05-26 21:53:39',
            ],
            [
                'nombre' => 'Volkswagen',
                'pais' => 'Alemania',
                'created_at' => '2024-05-26 21:53:39',
                'updated_at' => '2024-05-26 21:53:39',
            ],
        ];

        $modelos = [
            [
                'nombre' => 'Ka',
                'trim' => '1.5',
                'id_marca' => 1,
                'created_at' => '2024-05-13 03:49:44',
                'updated_at' => '2024-05-13 03:49:45',
            ],
            [
                'nombre' => 'Sonata',
                'trim' => 'N20',
                'id_marca' => 2,
                'created_at' => '2024-05-13 03:50:56',
                'updated_at' => '2024-05-13 03:50:57',
            ],
            [
                'nombre' => 'Mustang',
                'trim' => 'GT',
                'id_marca' => 1,
                'created_at' => '2024-05-13 03:51:41',
                'updated_at' => '2024-05-13 03:51:42',
            ],
            [
                'nombre' => 'Camaro',
                'trim' => 'SS',
                'id_marca' => 3,
                'created_at' => '2024-05-26 21:54:15',
                'updated_at' => '2024-05-26 21:54:15',
            ],
            [
                'nombre' => 'X5',
                'trim' => 'M',
                'id_marca' => 4,
                'created_at' => '2024-05-26 21:54:15',
                'updated_at' => '2024-05-26 21:54:15',
            ],
            [
                'nombre' => 'C-Class',
                'trim' => 'C63 AMG',
                'id_marca' => 5,
                'created_at' => '2024-05-26 21:54:15',
                'updated_at' => '2024-05-26 21:54:15',
            ],
            [
                'nombre' => 'Sportage',
                'trim' => 'LX',
                'id_marca' => 6,
                'created_at' => '2024-05-26 21:54:15',
                'updated_at' => '2024-05-26 21:54:15',
            ],
            [
                'nombre' => 'Elantra',
                'trim' => 'SEL',
                'id_marca' => 2,
                'created_at' => '2024-05-26 21:54:15',
                'updated_at' => '2024-05-26 21:54:15',
            ],
            [
                'nombre' => 'Altima',
                'trim' => 'SR',
                'id_marca' => 7,
                'created_at' => '2024-05-26 21:54:15',
                'updated_at' => '2024-05-26 21:54:15',
            ],
            [
                'nombre' => 'Jetta',
                'trim' => 'GLI',
                'id_marca' => 8,
                'created_at' => '2024-05-26 21:54:15',
                'updated_at' => '2024-05-26 21:54:15',
            ],
        ];

        $vehiculos = [
            [
                'matricula' => 'D1328721I',
                'precio' => 4500.00,
                'año' => 2021,
                'color' => 'Rojo',
                'estado' => 'Disponible',
                'pasajeros' => '4',
                'puertas' => '2',
                'maletas' => '3',
                'tipo' => 'Deportivo',
                'traccion' => 'Trasera',
                'transmision' => 'MT',
                'motor' => '5.0 V8',
                'opciones' => 'Aire acondicionado',
                'imagen' => '/cjcrent/public/images/flota/1_mustang.jpg',
                'id_modelo' => 3,
                'id_seguro' => 1,
                'created_at' => '2024-05-13 04:00:14',
                'updated_at' => '2024-05-13 04:00:15',
            ],
            [
                'matricula' => 'F5362383F',
                'precio' => 2000.00,
                'año' => 2011,
                'color' => 'Gris',
                'estado' => 'Disponible',
                'pasajeros' => '5',
                'puertas' => '4',
                'maletas' => '5',
                'tipo' => 'Sedan',
                'traccion' => 'Delantera',
                'transmision' => 'A',
                'motor' => '2.0 I4',
                'opciones' => 'Aire acondicionado',
                'imagen' => '/cjcrent/public/images/flota/2_sonata.jpg',
                'id_modelo' => 2,
                'id_seguro' => 1,
                'created_at' => '2024-05-13 04:00:42',
                'updated_at' => '2024-05-13 04:01:14',
            ],
            [
                'matricula' => 'GHI789',
                'precio' => 1000.00,
                'año' => 2009,
                'color' => 'Rojo',
                'estado' => 'Disponible',
                'pasajeros' => '5',
                'puertas' => '4',
                'maletas' => '3',
                'tipo' => 'Hatchback',
                'traccion' => 'FWD',
                'transmision' => 'A',
                'motor' => '1.6 I4',
                'opciones' => NULL,
                'imagen' => NULL,
                'id_modelo' => 1,
                'id_seguro' => 1,
                'created_at' => '2024-05-26 22:03:05',
                'updated_at' => '2024-05-26 22:03:05',
            ],
            [
                'matricula' => 'JKL012',
                'precio' => 5000.00,
                'año' => 2020,
                'color' => 'Blanco',
                'estado' => 'Disponible',
                'pasajeros' => '4',
                'puertas' => '2',
                'maletas' => '3',
                'tipo' => 'Deportivo',
                'traccion' => 'RWD',
                'transmision' => 'MT',
                'motor' => '6.2 V8',
                'opciones' => 'Sunroof',
                'imagen' => NULL,
                'id_modelo' => 4,
                'id_seguro' => 1,
                'created_at' => '2024-05-26 22:03:05',
                'updated_at' => '2024-05-26 22:03:05',
            ],
            [
                'matricula' => 'MNO345',
                'precio' => 6000.00,
                'año' => 2018,
                'color' => 'Gris',
                'estado' => 'Disponible',
                'pasajeros' => '5',
                'puertas' => '4',
                'maletas' => '5',
                'tipo' => 'Sedan',
                'traccion' => 'AWD',
                'transmision' => 'DCT',
                'motor' => '4.0 V8',
                'opciones' => 'Carbon fiber package, sunroof',
                'imagen' => NULL,
                'id_modelo' => 6,
                'id_seguro' => 1,
                'created_at' => '2024-05-26 22:03:05',
                'updated_at' => '2024-05-26 22:03:05',
            ],
            [
                'matricula' => 'PQR678',
                'precio' => 2000.00,
                'año' => 2020,
                'color' => 'Gris',
                'estado' => 'Disponible',
                'pasajeros' => '5',
                'puertas' => '4',
                'maletas' => '4',
                'tipo' => 'Sedan',
                'traccion' => 'FWD',
                'transmision' => 'Manual',
                'motor' => 'V6',
                'opciones' => 'Aire acondicionado',
                'imagen' => NULL,
                'id_modelo' => 8,
                'id_seguro' => 1,
                'created_at' => '2024-05-26 22:03:05',
                'updated_at' => '2024-05-26 22:03:05',
            ],
            [
                'matricula' => 'STU901',
                'precio' => 3000.00,
                'año' => 2019,
                'color' => 'Blanco',
                'estado' => 'Disponible',
                'pasajeros' => '4',
                'puertas' => '4',
                'maletas' => '6',
                'tipo' => 'SUV',
                'traccion' => 'AWD',
                'transmision' => 'A',
                'motor' => '2.5 I4',
                'opciones' => 'sunroof',
                'imagen' => NULL,
                'id_modelo' => 7,
                'id_seguro' => 1,
                'created_at' => '2024-05-26 22:03:05',
                'updated_at' => '2024-05-26 22:03:05',
            ],
            [
                'matricula' => 'VWX234',
                'precio' => 1500.00,
                'año' => 2002,
                'color' => 'Blanco',
                'estado' => 'Disponible',
                'pasajeros' => '5',
                'puertas' => '4',
                'maletas' => '4',
                'tipo' => 'Sedan',
                'traccion' => 'FWD',
                'transmision' => 'A',
                'motor' => '1.5 I4',
                'opciones' => NULL,
                'imagen' => NULL,
                'id_modelo' => 9,
                'id_seguro' => 1,
                'created_at' => '2024-05-26 22:03:05',
                'updated_at' => '2024-05-26 22:03:05',
            ],
            [
                'matricula' => 'YZA567',
                'precio' => 3000.00,
                'año' => 2017,
                'color' => 'Negro',
                'estado' => 'Disponible',
                'pasajeros' => '5',
                'puertas' => '4',
                'maletas' => '4',
                'tipo' => 'SUV',
                'traccion' => 'AWD',
                'transmision' => 'Automático',
                'motor' => 'V8',
                'opciones' => NULL,
                'imagen' => NULL,
                'id_modelo' => 5,
                'id_seguro' => 1,
                'created_at' => '2024-05-26 22:03:05',
                'updated_at' => '2024-05-26 22:03:05',
            ],
            [
                'matricula' => 'BCD890',
                'precio' => 1500.00,
                'año' => 2008,
                'color' => 'Rojo',
                'estado' => 'Disponible',
                'pasajeros' => '5',
                'puertas' => '4',
                'maletas' => '5',
                'tipo' => 'Sedan',
                'traccion' => 'FWD',
                'transmision' => 'Manual',
                'motor' => 'I4',
                'opciones' => NULL,
                'imagen' => NULL,
                'id_modelo' => 10,
                'id_seguro' => 1,
                'created_at' => '2024-05-26 22:03:05',
                'updated_at' => '2024-05-26 22:03:05',
            ],
        ];

        DB::table('marca')->insert($marcas);
        DB::table('modelo')->insert($modelos);
        DB::table('vehiculo')->insert($vehiculos);
    }
}
