<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SortieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(Sortie::class, 10)->create();
    }
}
