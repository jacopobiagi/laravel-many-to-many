<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Technology;
use App\Models\ProjectTechnology;

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

                $projectTechnology = ProjectTechnology:: inRandomOrder() -> limit(3) -> get();
                $technology -> projectTechnologies() -> attach($projectTechnology);
                $technology -> save();
            });
    }
}
