<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('users_table', function(Blueprint $users_table) {
        $users_table->increments('id');
        $users_table->string('first_name');
        $users_table->string('last_name');
        $users_table->string('email');
        $users_table->string('city');
        $users_table->decimal('price', 2);
        $users_table->string('profile_img');
        $users_table->boolean('online_lessons_bool');
        $users_table->boolean('alt_payment_bool');
        $users_table->string('alt_payments');
        $users_table->string('availability');
        $users_table->string('skills_learn');
        $users_table->string('skills_teach');
        $users_table->string('skills_img');
        $users_table->string('facebook');
        $users_table->string('twitter');
        $users_table->string('instagram');
        $users_table->string('youtube');
        $users_table->string('skype');

        $users_table->date('created_at');
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
