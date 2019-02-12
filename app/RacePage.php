<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RacePage extends Model
{
    protected $fillable = [
        'raceId', 'title', 'description', 'video', 'poster1', 'thumbnail'
      ];
}
