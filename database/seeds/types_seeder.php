<?php

use Illuminate\Database\Seeder;
use App\Type;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Generator as Faker;
class types_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $types = ["pizza","pesce","carne","sushi","pasta"];

        foreach($types as $type){
            DB::table("types")->insert(["name"=>$type, "image_url"=> "https://picsum.photos/200/300?random", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        }
        
    }
}
