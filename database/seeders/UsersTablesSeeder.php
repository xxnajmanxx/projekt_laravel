<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([

            'username' =>'Marcin',
            'email'=> 'marcin@gmail.com',
            'password' => Hash::make('haslo'),
            'remember_token' => str_random(10),


        ]);
    }
}
