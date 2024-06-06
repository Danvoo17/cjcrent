<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cargos = [
            [
                'nombre' => 'administrador',
                'descripcion' => 'Administrador del local en general.',
                'created_at' => '2024-06-1 01:10:00',
                'updated_at' => '2024-06-1 01:10:00',
            ],
            [
                'nombre' => 'BD admin',
                'descripcion' => 'Administra la base de datos',
                'created_at' => '2024-06-1 01:11:00',
                'updated_at' => '2024-06-1 01:11:00',
            ],
            [
                'nombre' => 'mecanico',
                'descripcion' => 'Repara y hace el mantenimiento de los vehiculos.',
                'created_at' => '2024-06-1 01:12:00',
                'updated_at' => '2024-06-1 01:12:00',
            ],
            [
                'nombre' => 'Limpiador de vehiculos',
                'descripcion' => 'Limpia y mantiene presentable los vehiculos',
                'created_at' => '2024-06-1 01:13:00',
                'updated_at' => '2024-06-1 01:13:00',
            ],
            [
                'nombre' => 'conserje',
                'descripcion' => 'Mantiene limpio el local',
                'created_at' => '2024-06-1 01:14:00',
                'updated_at' => '2024-06-1 01:14:00',
            ],
        ];

        $empleados = [
            [
                'id_emp' => 1,
                'nombre' => 'Joel',
                'apellido' => 'Castaños',
                'telefono' => '849-249-2006',
                'cedula' => '402-1199721-4',
                'email' => 'warper.master25@gmail.com',
                'direccion' => 'Las guazumas, moca',
                'saldo' => 40000.00,
                'id_cargo' => 1,
                'id_user' => 1,
                'created_at' => '2024-06-06 03:30:50',
                'updated_at' => '2024-06-06 03:30:50',
            ],
            [
                'id_emp' => 2,
                'nombre' => 'Joseph',
                'apellido' => 'Cruz',
                'telefono' => '899-233-5342',
                'cedula' => '230-7782551-2',
                'email' => 'joseph@gmail.com',
                'direccion' => 'El homs',
                'saldo' => 30000.00,
                'id_cargo' => 2,
                'id_user' => 3,
                'created_at' => '2024-06-06 03:35:23',
                'updated_at' => '2024-06-06 03:35:23',
            ],
            [
                'id_emp' => 3,
                'nombre' => 'Steven',
                'apellido' => 'Jimenez',
                'telefono' => '809-888-6666',
                'cedula' => '230-7782551-2',
                'email' => 'esetiven@gmail.com',
                'direccion' => 'el xd',
                'saldo' => 35000.00,
                'id_cargo' => 2,
                'id_user' => 4,
                'created_at' => '2024-06-06 03:36:15',
                'updated_at' => '2024-06-06 03:36:15',
            ],
            [
                'id_emp' => 4,
                'nombre' => 'Pedro',
                'apellido' => 'Gonzalez',
                'telefono' => '888-999-0123',
                'cedula' => '567-8236198-6',
                'email' => 'pedrogon@gmail.com',
                'direccion' => 'plaza internacional',
                'saldo' => 14000.00,
                'id_cargo' => 3,
                'id_user' => 5,
                'created_at' => '2024-06-06 03:37:30',
                'updated_at' => '2024-06-06 03:38:53',
            ],
            [
                'id_emp' => 5,
                'nombre' => 'Juan',
                'apellido' => 'Perez',
                'telefono' => '829-555-6721',
                'cedula' => '784-2298142-8',
                'email' => 'juan17@gmail.com',
                'direccion' => 'el embrujo, calle 13',
                'saldo' => 14000.00,
                'id_cargo' => 3,
                'id_user' => 6,
                'created_at' => '2024-06-06 03:56:36',
                'updated_at' => '2024-06-06 03:56:36',
            ],
            [
                'id_emp' => 6,
                'nombre' => 'Ismael',
                'apellido' => 'Peralta',
                'telefono' => '809-231-7238',
                'cedula' => '672-2749167-5',
                'email' => 'ismaelp@gmail.com',
                'direccion' => 'el embrujo, calle 11',
                'saldo' => 10000.00,
                'id_cargo' => 4,
                'id_user' => 7,
                'created_at' => '2024-06-06 03:57:45',
                'updated_at' => '2024-06-06 03:57:45',
            ],
            [
                'id_emp' => 7,
                'nombre' => 'Eudys',
                'apellido' => 'Estrella',
                'telefono' => '809-238-3874',
                'cedula' => '652-6729672-4',
                'email' => 'eudyest@gmail.com',
                'direccion' => 'villa olga',
                'saldo' => 10000.00,
                'id_cargo' => 5,
                'id_user' => 8,
                'created_at' => '2024-06-06 03:59:07',
                'updated_at' => '2024-06-06 03:59:07',
            ],
        ];


        DB::table('cargo')->insert($cargos);
        DB::table('empleado')->insert($empleados);
    }
}
