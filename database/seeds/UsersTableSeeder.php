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
            'id' => 1,
            'username' => 'akbar',
            'email' => 'akbar@gmail.com',
            'name' => 'Akbar As Syidiqi',
            'password' => Hash::make('akbar123'),
            'remember_token' => '1'

        ]);

         DB::table('users')->insert([
            'id' => 2,
            'username' => 'daffa',
            'email' => 'daffa@gmail.com',
            'name' => 'Daffa Maulana',
            'password' => Hash::make('daffa123'),
            'remember_token' => '2'

        ]);

       
    }
}
