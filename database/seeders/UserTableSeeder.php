<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Rafi', 'email' => 'rafi@gmail.com', 'password' => '1234'],
            ['name' => 'Siam', 'email' => 'siam@gmail.com', 'password' => '1234'],
            ['name' => 'Rakib', 'email' => 'rakib@gmail.com', 'password' => '1234'],
        ];
        User::insert($users);
    }
}
