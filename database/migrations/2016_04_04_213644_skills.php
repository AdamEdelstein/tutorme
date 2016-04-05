<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Skills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('skills', function(Blueprint $skills_table) {
        $tudors_table->increments('id');
        $tudors_table->string('skill_name');
        $tudors_table->string('skill_level');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
