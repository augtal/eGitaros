<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TipasTableSeeder::class);
        $this->call(SpalvosTableSeeder::class);
        $this->call(SandelysTableSeeder::class);
        $this->call(PadalinysTableSeeder::class);
        $this->call(ProduktasTableSeeder::class);
        $this->call(ProduktoLikutisTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
