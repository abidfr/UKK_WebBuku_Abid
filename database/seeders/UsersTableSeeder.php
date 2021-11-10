<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $users = [
                [
                    'name' => 'Admin nurbaya',
                    'email' => 'admin@gmail.com',
                    'password' => bcrypt('abid123'),
                ]
            ];
    
            User::insert($users);
        }
    }
}
    

