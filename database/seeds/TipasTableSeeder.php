<?php

use Illuminate\Database\Seeder;

class TipasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipas')->insert([
            [
            'pavadinimas' => 'Akustine',
            ],
            [
            'pavadinimas' => 'Elektrine',
            ],
            [
            'pavadinimas' => 'Bosine',
            ]
        ]);
    }
}
