<?php

use Illuminate\Database\Seeder;
use App\Order;
class orders_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Order::class,10)->create();
    }
}
