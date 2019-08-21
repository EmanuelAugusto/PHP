<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('users')->insert([
            'nome' => 'Unu Digital',
            'username' => 'unudigital',
            'email' => 'unudigital@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
