<?php

namespace Database\Seeders;
use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'name' => 'Andy Caduyac',
                'email' => 'candysenpai@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('pass1234')
            ],
            [
                'name' => 'Maria Cristina',
                'email' => 'mariacristina@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('pass1234')
            ],
            [
                'name' => 'Edward Newgate',
                'email' => 'edwardnewgate@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('pass1234')
            ],

        ];
        foreach($users as $user){
            User::create($user);

        }
    }
}
