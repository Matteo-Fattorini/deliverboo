<?php

use Illuminate\Database\Seeder;
use App\Type;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class types_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ["pizza","pesce","carne","sushi","pasta"];

        foreach($types as $type){
            DB::table("types")->insert(["name"=>$type,"slug"=>"slug_prova", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        }
        
    }
}
