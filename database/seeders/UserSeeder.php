<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'administrator',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('a'),
                'level' => 1
            ],
            [
                'name' => 'karyawan',
                'email' => 'karyawan@gmail.com',
                'password' => bcrypt('a'),
                'level' => 2
            ],
         ];
    
            foreach ($user as $key =>$value) {
                User::create($value);
            }
        }
    }

