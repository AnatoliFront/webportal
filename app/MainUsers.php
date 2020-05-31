<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainUsers extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'birdth_date', 'passport_num', 'region', 'city',
        'last_name', 'kind_help', 'kind_activity', 'phone', 'login',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
