<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tutors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tutors', function(Blueprint $tutors_table) {
        $tudors_table->increments('id');
        $tudors_table->string('first_name');
        $tudors_table->string('last_name');
        $tudors_table->string('email');
        $tudors_table->string('city');
        $tudors_table->decimal('price', 2);
        $tudors_table->boolean('alt_payment_bool');
        $tudors_table->string('alt_payments');
        $tudors_table->string('availability';);
        $tudors_table->string('profile_img');
        $tudors_table->string('facebook');
        $tudors_table->string('twitter');
        $tudors_table->string('instagram');
        $tudors_table->string('youtube');
        $tudors_table->string('skills');
        $tudors_table->string('skills_img');


        $tudors_table->date('created_at');

      });
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
