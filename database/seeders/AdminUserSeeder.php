<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@smkbhaktiprajamargasari.sch.id',
                'roles' => 'ADMIN',
                'password' => Hash::make('bismillah'),
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@smkbhaktiprajamargasari.sch.id',
                'roles' => 'ADMIN',
                'password' => Hash::make('bismillah'),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
