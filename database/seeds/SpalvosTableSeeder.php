<?php

use Illuminate\Database\Seeder;

class SpalvosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spalvos')->insert([
            [
            'pavadinimas' => 'Ruda',
            ],
            [
            'pavadinimas' => 'Balta',
            ],
            [
            'pavadinimas' => 'Juoda',
            ],
            [
            'pavadinimas' => 'Raudona',
            ],
            [
            'pavadinimas' => 'Zalia',
            ],
            [
            'pavadinimas' => 'Melyna',
            ],
            [
            'pavadinimas' => 'Geltona',
            ]
        ]);
    }
}
