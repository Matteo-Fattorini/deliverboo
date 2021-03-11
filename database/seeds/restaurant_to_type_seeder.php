<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Type;
use App\Restaurant;
use Faker\Generator as Faker;
use Carbon\Carbon;
class restaurant_to_type_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $types = Type::all();
        // $restaurants = Restaurant::all();

        // foreach ($restaurants as $restaurant) {
        //     for ($i = 1; $i <= $faker->numberBetween(1, ($types->count())); $i++) {

        //         DB::table("restaurant_type")->insert([
        //             "restaurant_id" => $restaurant->id,
        //             "type_id" => $i,
        //             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    
        //         ]);
        //     }
        // }

        DB::table('restaurant_type')->insert([
            [
                'restaurant_id' => 1,
                'type_id' => 8
            ],
            [
                'restaurant_id' => 1,
                'type_id' => 1
            ],
            [
                'restaurant_id' => 2,
                'type_id' => 1
            ],
        ]);
    }
}
