<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsUser::create([
            'name'  => 'royan',
            'username'  => 'royan',
            'email'  => 'royan@gmail.com',
            'password'  => bcrypt('password'),
            'roles'     => 'admin'
        ]);
    }
}
