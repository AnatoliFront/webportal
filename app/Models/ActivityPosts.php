<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityPosts extends Model
{
    protected $fillable = [
        'post_id', 'title', 'image', 'user_name', 'organisation_name', 'region', 'city',
        'date', 'time', 'kind_help', 'description',
    ];
}
