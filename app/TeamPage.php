<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamPage extends Model
{
    protected $fillable = [
        'constructorId', 'title', 'tagline', 'description','content', 'image', 'thumbnail'
      ];
}
