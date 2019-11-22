<?php

use Illuminate\Database\Seeder;

class ProduktasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produktas')->insert([
    ['produkto_ID' => '1','pavadinimas' => 'AQ1234','tipas' => '1','spalva' => '5','kaina' => '69.00','aprasas' => 'Labai gera zalia gitara etc.'],
    ['produkto_ID' => '2','pavadinimas' => 'BQ1234','tipas' => '3','spalva' => '3','kaina' => '100.00','aprasas' => 'Labai gera juoda gitara etc.'],
   ['produkto_ID' => '3','pavadinimas' => 'BQ1235','tipas' => '3','spalva' => '6','kaina' => '100.00','aprasas' => 'Labai gera melyna gitara etc.'],
   ['produkto_ID' => '4','pavadinimas' => 'AQ1237','tipas' => '1','spalva' => '1','kaina' => '70.00','aprasas' => 'Labai gera ruda gitara etc.'],
   ['produkto_ID' => '5','pavadinimas' => 'BQ1236','tipas' => '3','spalva' => '2','kaina' => '100.00','aprasas' => 'Labai gera balta gitara etc.'],
   ['produkto_ID' => '6','pavadinimas' => 'EQ1234','tipas' => '2','spalva' => '4','kaina' => '110.00','aprasas' => 'Labai gera raudona gitara etc.'],
   ['produkto_ID' => '7','pavadinimas' => 'EQ1235','tipas' => '2','spalva' => '6','kaina' => '110.00','aprasas' => 'Labai gera melyna gitara etc.'],
   ['produkto_ID' => '8','pavadinimas' => 'EQ1236','tipas' => '2','spalva' => '1','kaina' => '110.00','aprasas' => 'Labai gera ruda gitara etc.'],
   ['produkto_ID' => '9','pavadinimas' => 'EQ1237','tipas' => '2','spalva' => '3','kaina' => '110.00','aprasas' => 'Labai gera juoda gitara etc.'],
   ['produkto_ID' => '10','pavadinimas' => 'EQ1238','tipas' => '2','spalva' => '7','kaina' => '110.00','aprasas' => 'Labai gera geltona gitara etc.'],
   ['produkto_ID' => '11','pavadinimas' => 'AQ1235','tipas' => '1','spalva' => '4','kaina' => '70.00','aprasas' => 'Labai gera raudona gitara etc.'],
   ['produkto_ID' => '12','pavadinimas' => 'AQ1236','tipas' => '1','spalva' => '6','kaina' => '70.00','aprasas' => 'Labai gera melyna gitara etc.'],
   ['produkto_ID' => '13','pavadinimas' => 'AQ1238','tipas' => '1','spalva' => '2','kaina' => '70.00','aprasas' => 'Labai gera balta gitara etc.'],
   ['produkto_ID' => '30','pavadinimas' => 'AQ1259','tipas' => '1','spalva' => '5','kaina' => '104.00','aprasas' => 'Cras pellentesque volutpat dui. Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam.'],
   ['produkto_ID' => '31','pavadinimas' => 'EQ1280','tipas' => '2','spalva' => '2','kaina' => '103.00','aprasas' => 'Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros. Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue.'],
   ['produkto_ID' => '32','pavadinimas' => 'AQ1265','tipas' => '1','spalva' => '1','kaina' => '115.00','aprasas' => 'Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis. Fusce posuere felis sed lacus.'],
   ['produkto_ID' => '33','pavadinimas' => 'BQ1263','tipas' => '3','spalva' => '2','kaina' => '117.00','aprasas' => 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla.'],
   ['produkto_ID' => '34','pavadinimas' => 'AQ1240','tipas' => '1','spalva' => '1','kaina' => '89.00','aprasas' => 'Maecenas pulvinar lobortis est. Phasellus sit amet erat. Nulla tempus.'],
   ['produkto_ID' => '35','pavadinimas' => 'AQ1247','tipas' => '1','spalva' => '5','kaina' => '115.00','aprasas' => 'Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus. Phasellus in felis.'],
   ['produkto_ID' => '36','pavadinimas' => 'EQ1254','tipas' => '2','spalva' => '4','kaina' => '118.00','aprasas' => 'Pellentesque ultrices mattis odio. Donec vitae nisi. Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla.'],
   ['produkto_ID' => '37','pavadinimas' => 'AQ1250','tipas' => '1','spalva' => '5','kaina' => '106.00','aprasas' => 'Integer ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.'],
   ['produkto_ID' => '38','pavadinimas' => 'BQ1273','tipas' => '3','spalva' => '1','kaina' => '120.00','aprasas' => 'Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.'],
   ['produkto_ID' => '39','pavadinimas' => 'AQ1261','tipas' => '1','spalva' => '4','kaina' => '144.00','aprasas' => 'Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis. Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl.'],
   ['produkto_ID' => '41','pavadinimas' => 'BQ1262','tipas' => '3','spalva' => '5','kaina' => '139.00','aprasas' => 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.'],
   ['produkto_ID' => '42','pavadinimas' => 'EQ1260','tipas' => '2','spalva' => '4','kaina' => '136.00','aprasas' => 'Morbi ut odio. Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim.'],
   ['produkto_ID' => '43','pavadinimas' => 'BQ1265','tipas' => '3','spalva' => '2','kaina' => '92.00','aprasas' => 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.'],
   ['produkto_ID' => '44','pavadinimas' => 'EQ1268','tipas' => '2','spalva' => '4','kaina' => '121.00','aprasas' => 'Morbi quis tortor id nulla ultrices aliquet. Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam.'],
   ['produkto_ID' => '45','pavadinimas' => 'EQ1257','tipas' => '2','spalva' => '5','kaina' => '81.00','aprasas' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.'],
   ['produkto_ID' => '46','pavadinimas' => 'EQ1265','tipas' => '2','spalva' => '1','kaina' => '89.00','aprasas' => 'Proin at turpis a pede posuere nonummy. Integer non velit.'],
   ['produkto_ID' => '47','pavadinimas' => 'EQ1240','tipas' => '2','spalva' => '3','kaina' => '127.00','aprasas' => 'Suspendisse accumsan tortor quis turpis. Sed ante.'],
   ['produkto_ID' => '48','pavadinimas' => 'BQ1247','tipas' => '3','spalva' => '2','kaina' => '145.00','aprasas' => 'Vivamus tortor. Duis mattis egestas metus. Aenean fermentum.'],
   ['produkto_ID' => '49','pavadinimas' => 'BQ1252','tipas' => '3','spalva' => '4','kaina' => '114.00','aprasas' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vel augue. Vestibulum rutrum rutrum neque.']
        ]);
    }
}
