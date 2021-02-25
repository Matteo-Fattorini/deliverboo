<?php

use Illuminate\Database\Seeder;
use App\Dish;

class dishes_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Dish::class, 100)->create();
    }
}
