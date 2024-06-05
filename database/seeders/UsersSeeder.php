<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = [
            [
                'id' => 1,
                'name' => 'Joey',
                'email' => 'warper.master25@gmail.com',
                'email_verified_at' => null,
                'password' => '$2y$12$ssfByzH1.jh2bM6sOoHuYeazBK2ttA5fAcZl.2r.ySzWNfK41jflC', 
                'rol' => 'admin',
                'remember_token' => 'dVpSvSh46gCAxNRxPfXmEyzT2hRUChWV15K0I1OKYLE8piAUAOQLeYuFdKzw',
                'created_at' => '2024-05-10 15:49:07',
                'updated_at' => '2024-05-23 16:39:53'
            ],
            [
                'id' => 2,
                'name' => 'Joel',
                'email' => 'joel@gmail.com',
                'email_verified_at' => null,
                'password' => '$2y$12$5MSNIPOWe43vwpVPpzQTR.1guxfd.g5QzZHdkuCjQMSDA64986yvm', 
                'rol' => null,
                'remember_token' => null,
                'created_at' => '2024-05-30 04:22:23',
                'updated_at' => '2024-05-30 04:22:23'
            ],
            [
                'id' => 3,
                'name' => 'josephxd',
                'email' => 'joseph@gmail.com',
                'email_verified_at' => null,
                'password' => '$2y$12$COTD8WOCzXqD8uhfz1DpruxMNVLRYhsM8Ta7iLQnBJXcx42krQLRO', 
                'rol' => 'admin',
                'remember_token' => null,
                'created_at' => '2024-05-31 18:04:37',
                'updated_at' => '2024-05-31 18:04:37'
            ],
            [
                'id' => 4,
                'name' => 'etiben',
                'email' => 'esetiven@gmail.com',
                'email_verified_at' => null,
                'password' => '$2y$12$TZm/SAgSFBk.Vg2tpIckjeuYcOypUgoPjuAlusP6z6Qxe9QsA34yO', 
                'rol' => 'admin',
                'remember_token' => null,
                'created_at' => '2024-05-31 18:05:20',
                'updated_at' => '2024-05-31 18:05:20'
            ],
        ];

        $clientes = [
            [
                'nombre' => 'Joel',
                'apellido' => 'Castaños',
                'fecha_nac' => '2006-03-05',
                'telefono' => '849-249-2006',
                'cedula' => '402-1199721-4',
                'licencia' => '232131',
                'id_user' => 2,
                'created_at' => '2024-05-13 05:18:15',
                'updated_at' => '2024-05-13 05:18:16',
            ],
            [
                'nombre' => 'joseph',
                'apellido' => 'cruz',
                'fecha_nac' => '2024-05-31',
                'telefono' => '809-888-6666',
                'cedula' => '230-7782551-2',
                'licencia' => '435832',
                'id_user' => 3,
                'created_at' => '2024-05-31 18:08:42',
                'updated_at' => '2024-05-31 18:08:42',
            ],
            [
                'nombre' => 'etiben manuei',
                'apellido' => 'gimene dia',
                'fecha_nac' => '2024-05-31',
                'telefono' => '888-999-0123',
                'cedula' => '321-3512353-9',
                'licencia' => '321-3512353-9',
                'id_user' => 4,
                'created_at' => '2024-05-31 18:07:14',
                'updated_at' => '2024-05-31 18:07:14',
            ],
        ];

        DB::table('users')->insert($users);
        DB::table('clientes')->insert($clientes);

    }
}
