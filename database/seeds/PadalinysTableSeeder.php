<?php

use Illuminate\Database\Seeder;

class PadalinysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('padalinys')->insert([
            [
            'pavadinimas' => 'Kaunas',
            'adresas' => 'Kauno g. 20',
            'telefonas' => '86868686',
            'epastas' => 'kaunas@gitaros.lt',
            ],
            [
            'pavadinimas' => 'Siauliai',
            'adresas' => 'Siauliu g. 21',
            'telefonas' => '87878787',
            'epastas' => 'siauliai@gitaros.lt',
            ],
            [
            'pavadinimas' => 'Klaipeda',
            'adresas' => 'Klaipedos g. 22',
            'telefonas' => '88888888',
            'epastas' => 'klaipeda@gitaros.lt',
            ],
            [
            'pavadinimas' => 'Vilnius',
            'adresas' => 'Vilniaus g. 23',
            'telefonas' => '89898989',
            'epastas' => 'vilnius@gitaros.lt',
            ]
        ]);
    }
}
