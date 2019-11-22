<?php

use Illuminate\Database\Seeder;

class ProduktoLikutisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produkto_likutis')->insert([
        ['likucio_ID' => '1','sandelys' => '1','produktas' => '1','likutis' => '7'],
        ['likucio_ID' => '2','sandelys' => '1','produktas' => '11','likutis' => '3'],
        ['likucio_ID' => '3','sandelys' => '3','produktas' => '11','likutis' => '5'],
        ['likucio_ID' => '4','sandelys' => '1','produktas' => '12','likutis' => '4'],
        ['likucio_ID' => '5','sandelys' => '3','produktas' => '4','likutis' => '5'],
        ['likucio_ID' => '6','sandelys' => '2','produktas' => '13','likutis' => '6'],
        ['likucio_ID' => '7','sandelys' => '1','produktas' => '2','likutis' => '4'],
        ['likucio_ID' => '8','sandelys' => '2','produktas' => '12','likutis' => '7'],
        ['likucio_ID' => '9','sandelys' => '1','produktas' => '3','likutis' => '7'],
        ['likucio_ID' => '10','sandelys' => '2','produktas' => '1','likutis' => '6'],
        ['likucio_ID' => '11','sandelys' => '3','produktas' => '10','likutis' => '4'],
        ['likucio_ID' => '13','sandelys' => '3','produktas' => '3','likutis' => '2'],
        ['likucio_ID' => '14','sandelys' => '3','produktas' => '8','likutis' => '3'],
        ['likucio_ID' => '15','sandelys' => '3','produktas' => '9','likutis' => '6'],
        ['likucio_ID' => '17','sandelys' => '2','produktas' => '10','likutis' => '1'],
        ['likucio_ID' => '18','sandelys' => '1','produktas' => '10','likutis' => '6'],
        ['likucio_ID' => '19','sandelys' => '3','produktas' => '6','likutis' => '7'],
        ['likucio_ID' => '21','sandelys' => '2','produktas' => '8','likutis' => '3'],
        ['likucio_ID' => '22','sandelys' => '3','produktas' => '13','likutis' => '4'],
        ['likucio_ID' => '23','sandelys' => '2','produktas' => '9','likutis' => '6'],
        ['likucio_ID' => '24','sandelys' => '1','produktas' => '9','likutis' => '2'],
        ['likucio_ID' => '25','sandelys' => '3','produktas' => '12','likutis' => '2'],
        ['likucio_ID' => '26','sandelys' => '2','produktas' => '2','likutis' => '4'],
        ['likucio_ID' => '27','sandelys' => '1','produktas' => '6','likutis' => '5'],
        ['likucio_ID' => '28','sandelys' => '1','produktas' => '5','likutis' => '4'],
        ['likucio_ID' => '29','sandelys' => '3','produktas' => '7','likutis' => '2'],
        ['likucio_ID' => '30','sandelys' => '1','produktas' => '5','likutis' => '4'],
        ['likucio_ID' => '31','sandelys' => '3','produktas' => '7','likutis' => '2'],
        ['likucio_ID' => '32','sandelys' => '3','produktas' => '32','likutis' => '2'],
        ['likucio_ID' => '33','sandelys' => '1','produktas' => '45','likutis' => '3'],
        ['likucio_ID' => '34','sandelys' => '2','produktas' => '32','likutis' => '1'],
        ['likucio_ID' => '35','sandelys' => '2','produktas' => '49','likutis' => '1'],
        ['likucio_ID' => '36','sandelys' => '1','produktas' => '42','likutis' => '7'],
        ['likucio_ID' => '37','sandelys' => '3','produktas' => '35','likutis' => '7'],
        ['likucio_ID' => '38','sandelys' => '3','produktas' => '41','likutis' => '4'],
        ['likucio_ID' => '39','sandelys' => '3','produktas' => '45','likutis' => '7'],
        ['likucio_ID' => '40','sandelys' => '1','produktas' => '45','likutis' => '3'],
        ['likucio_ID' => '41','sandelys' => '3','produktas' => '46','likutis' => '1'],
        ['likucio_ID' => '42','sandelys' => '2','produktas' => '34','likutis' => '3'],
        ['likucio_ID' => '43','sandelys' => '3','produktas' => '36','likutis' => '5'],
        ['likucio_ID' => '44','sandelys' => '3','produktas' => '35','likutis' => '6'],
        ['likucio_ID' => '45','sandelys' => '3','produktas' => '32','likutis' => '3'],
        ['likucio_ID' => '46','sandelys' => '1','produktas' => '32','likutis' => '4'],
        ['likucio_ID' => '47','sandelys' => '3','produktas' => '48','likutis' => '4'],
        ['likucio_ID' => '49','sandelys' => '1','produktas' => '30','likutis' => '2'],
        ['likucio_ID' => '50','sandelys' => '1','produktas' => '36','likutis' => '1'],
        ['likucio_ID' => '51','sandelys' => '2','produktas' => '45','likutis' => '1']
        ]);
    }
}
