<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    protected $fillable = ['url', 'title', 'description', 'episode_number'];
}
