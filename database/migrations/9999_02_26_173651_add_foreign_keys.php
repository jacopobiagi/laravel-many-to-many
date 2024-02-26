<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('technology_project_technology', function (Blueprint $table) {
            $table -> foreignId('technology_id') -> constrained();
            $table -> foreignId('project_technology_id') -> constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('technology_project_technology', function (Blueprint $table) {

            $table -> dropForeign('technology_project_technology_technology_id_foreign') -> constrained();
            $table -> dropColumn('technology_id');

            $table -> dropForeign('technology_project_technology_project_technology_id_foreign') -> constrained();
            $table -> dropColumn('project_technology_id');
        });
    }
};
