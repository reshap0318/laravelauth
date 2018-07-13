<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'username' => 'admin',
            'nama' => 'admin',
            'avatar' => 'avatars-5b46468554ce5.png',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'status' => 1
        ]);
        $admin->assignRole('Administrator');

        $aldo = User::create([
            'username' => 'reshap03',
            'nama' => 'Reinaldo Shandev Pratama',
            'avatar' => 'avatars-5b45a5ae814a3.png',
            'email' => 'aldo@gmail.com',
            'password' => bcrypt('4n1m3L0v3rs'),
            'status' => 1
        ]);
        $aldo->assignRole('Super-Admin');
    }
}
 