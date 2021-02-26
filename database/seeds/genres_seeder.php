<?php

use Illuminate\Database\Seeder;
use App\Type;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class genres_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = ["antipasti", "primi", "secondi", "dolci", "bevande", "digestivi"];

        foreach ($genres as $genre) {
            DB::table("genres")->insert([
                "name" => $genre, "image_url" => "slug_prova", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
