<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DriverPage extends Model
{
    protected $fillable = [
        'driverId', 'title', 'description','content', 'image', 'poster1', 'poster2', 'poster3', 'thumbnail'
      ];
}
