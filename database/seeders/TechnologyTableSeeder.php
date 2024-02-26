<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Technology;
use App\Models\Project_technology;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Technology:: factory()
            -> count(100)
            -> create()
            -> each(function($technology){

                $project_technology = Project_technology:: inRandomOrder() -> limit(3) -> get();
                $technology -> posts() -> attach($project_technology);
                $technology -> save();
            });

    }
}
