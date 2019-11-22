<?php

use Illuminate\Database\Seeder;

class SandelysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sandelys')->insert([
            [
            'pavadinimas' => 'Kauno',
            'adresas' => 'Kauno g. 20',
            ],
            [
            'pavadinimas' => 'Siauliu',
            'adresas' => 'Siauliu g. 21',
            ],
            [
            'pavadinimas' => 'Klaipedos',
            'adresas' => 'Klaipedos g. 22',
            ]
        ]);
    }
}
