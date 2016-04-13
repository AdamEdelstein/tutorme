<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'city',
        //
        // 'first_name', 'last_name', 'city', 'price',
        // 'p_imageName', 's_imageName', 'online_lessons_bool', 'alt_payment_bool',
        // 'alt_payments', 'availability', 'skills_learn', 'skills_teach',
        // 'facebook', 'instagram', 'twitter', 'youtube', 'skype',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
