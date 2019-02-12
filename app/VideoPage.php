<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoPage extends Model
{
    protected $fillable = [
        'constructorId', 'raceId', 'driverId', 'title', 'teaser', 'tagline', 'description','content', 'image', 'thumbnail', 'video'
      ];
}
