<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Technology;
use App\Models\Project_technology;

class ProjectTechnologyTableSeeder extends Seeder
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
            -> each(function($projectTechnology){

                $technology = Technology:: inRandomOrder() -> limit(3) -> get();
                $projectTechnology -> posts() -> attach($technology);
                $projectTechnology -> save();
            });

    }
}
