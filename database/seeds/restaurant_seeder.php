<?php

use Illuminate\Database\Seeder;
use App\Restaurant;
class restaurant_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Restaurant::class, 10)->create();
    }
}
