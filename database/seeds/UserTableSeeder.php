<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'id' => '1',
            'name' => 'Testas',
            'username' => 'test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('test1234'),
            ],
            [
            'id' => '2',
            'name' => 'Testas2',
            'username' => 'test2',
            'email' => 'test2@gmail.com',
            'password' => Hash::make('test1234'),
            ],
        ]);
    }
}
