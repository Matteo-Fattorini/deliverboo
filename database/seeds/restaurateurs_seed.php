<?php

use Illuminate\Database\Seeder;
use App\Restaurateur;
class restaurateurs_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Restaurateur::class,50)->create();
    }
}
