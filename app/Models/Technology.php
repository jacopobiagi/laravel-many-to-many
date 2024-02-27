<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ProjectTechnology;

class Technology extends Model
{
    use HasFactory;

    public function projectTechnologies(){
        return $this -> belongsToMany(ProjectTechnology::class);
    }
}
