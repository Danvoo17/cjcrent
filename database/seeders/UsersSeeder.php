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
                'password' => '$2y$12$ssfByzH1.jh2bM6sOoHuYeazBK2ttA5fAcZl.2r.ySzWNfK41jflC',
                'rol' => 'admin',
                'created_at' => '2024-05-10 19:49:07',
                'updated_at' => '2024-05-23 20:39:53',
            ],
            [
                'id' => 2,
                'name' => 'Joel',
                'email' => 'joel@gmail.com',
                'password' => '$2y$12$5MSNIPOWe43vwpVPpzQTR.1guxfd.g5QzZHdkuCjQMSDA64986yvm',
                'rol' => 'user',
                'created_at' => '2024-05-30 08:22:23',
                'updated_at' => '2024-06-05 08:42:31',
            ],
            [
                'id' => 3,
                'name' => 'josephxd',
                'email' => 'joseph@gmail.com',
                'password' => '$2y$12$COTD8WOCzXqD8uhfz1DpruxMNVLRYhsM8Ta7iLQnBJXcx42krQLRO',
                'rol' => 'admin',
                'created_at' => '2024-05-31 22:04:37',
                'updated_at' => '2024-06-05 08:30:16',
            ],
            [
                'id' => 4,
                'name' => 'etiben',
                'email' => 'esetiven@gmail.com',
                'password' => '$2y$12$TZm/SAgSFBk.Vg2tpIckjeuYcOypUgoPjuAlusP6z6Qxe9QsA34yO',
                'rol' => 'admin',
                'created_at' => '2024-05-31 22:05:20',
                'updated_at' => '2024-05-31 22:05:20',
            ],
            [
                'id' => 5,
                'name' => 'pedrito3',
                'email' => 'pedrogon@gmail.com',
                'password' => '$2y$12$COTD8WOCzXqD8uhfz1DpruxMNVLRYhsM8Ta7iLQnBJXcx42krQLRO',
                'rol' => 'user',
                'created_at' => '2024-06-05 23:09:39',
                'updated_at' => '2024-06-05 23:09:39',
            ],
            [
                'id' => 6,
                'name' => 'juan17',
                'email' => 'juan17@gmail.com',
                'password' => '$2y$12$COTD8WOCzXqD8uhfz1DpruxMNVLRYhsM8Ta7iLQnBJXcx42krQLRO',
                'rol' => 'user',
                'created_at' => '2024-06-05 23:10:42',
                'updated_at' => '2024-06-05 23:10:42',
            ],
            [
                'id' => 7,
                'name' => 'ismaelp',
                'email' => 'ismaelp@gmail.com',
                'password' => ' $2y$12$COTD8WOCzXqD8uhfz1DpruxMNVLRYhsM8Ta7iLQnBJXcx42krQLRO',
                'rol' => 'user',
                'created_at' => '2024-06-05 23:11:22',
                'updated_at' => '2024-06-05 23:11:22',
            ],
            [
                'id' => 8,
                'name' => 'menorcito11',
                'email' => 'eudyest@gmail.com',
                'password' => '$2y$12$COTD8WOCzXqD8uhfz1DpruxMNVLRYhsM8Ta7iLQnBJXcx42krQLRO',
                'rol' => 'user',
                'created_at' => '2024-06-05 23:12:07',
                'updated_at' => '2024-06-05 23:12:07',
            ],
            [
                'id' => 9,
                'name' => 'luzzi',
                'email' => 'luzm@gmail.com',
                'password' => '$2y$12$shhoCuar8CXdciN.B8AGLup8kC18yYIak3mE1vHKl69.VovrNYzUq',
                'rol' => 'user',
                'created_at' => '2024-06-06 04:08:04',
                'updated_at' => '2024-06-06 04:08:35',
            ],
            [
                'id' => 10,
                'name' => 'Furrus',
                'email' => 'omar@gmail.com',
                'password' => '$2y$12$e86M9fcE1SvdiK9u1AVrYu2E99hBJl9FV8vhEKgtJs3HhyB.1LV4u',
                'rol' => 'user',
                'created_at' => '2024-06-06 04:36:25',
                'updated_at' => '2024-06-06 04:36:25',
            ],
            [
                'id' => 11,
                'name' => 'Lizma',
                'email' => 'lizmariel@gmail.com',
                'password' => '$2y$12$01ducpRez4k0EXZNBZBcN.qA0IwM1YyD4ST/VcKqT.C.ERSVP9feO',
                'rol' => 'user',
                'created_at' => '2024-06-06 04:38:49',
                'updated_at' => '2024-06-06 04:38:49',
            ],
            [
                'id' => 12,
                'name' => 'Migfdz',
                'email' => 'miguelfernandez@gmail.com',
                'password' => '$2y$12$AhXIFZWtkfF6C.5Z2OCAR.xl1nIUgpMdOhDqxEZKEDn0i1wC404kK',
                'rol' => 'user',
                'created_at' => '2024-06-06 04:44:25',
                'updated_at' => '2024-06-06 04:44:25',
            ],
        ];

        $clientes = [
            [
                'id_cliente' => 1,
                'nombre' => 'Luz',
                'apellido' => 'Maria',
                'fecha_nac' => '2006-07-18',
                'telefono' => '809-237-3781',
                'cedula' => '892-7328891-3',
                'licencia' => '892-7328891-3',
                'id_user' => 9,
                'created_at' => '2024-06-06 05:08:55',
                'updated_at' => '2024-06-06 05:09:08',
            ],
            [
                'id_cliente' => 2,
                'nombre' => 'Omar',
                'apellido' => 'Morales',
                'fecha_nac' => '2006-08-16',
                'telefono' => '829-234-2891',
                'cedula' => '783-6372191-3',
                'licencia' => '783-6372191-3',
                'id_user' => 10,
                'created_at' => '2024-06-06 05:59:41',
                'updated_at' => '2024-06-06 05:59:41',
            ],
            [
                'id_cliente' => 3,
                'nombre' => 'Liz',
                'apellido' => 'Mariel',
                'fecha_nac' => '2006-05-30',
                'telefono' => '849-281-8231',
                'cedula' => '783-3748901-2',
                'licencia' => '783-3748901-2',
                'id_user' => 11,
                'created_at' => '2024-06-06 06:00:34',
                'updated_at' => '2024-06-06 06:00:34',
            ],
            [
                'id_cliente' => 4,
                'nombre' => 'Miguel',
                'apellido' => 'Fernandez',
                'fecha_nac' => '2006-11-14',
                'telefono' => '849-829-8732',
                'cedula' => '673-8349093-6',
                'licencia' => '673-8349093-6',
                'id_user' => 12,
                'created_at' => '2024-06-06 06:02:08',
                'updated_at' => '2024-06-06 06:08:47',
            ],
        ];

        DB::table('users')->insert($users);
        DB::table('clientes')->insert($clientes);

    }
}
