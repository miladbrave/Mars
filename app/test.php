<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    public function dropdown()
    {
        return $this->hasOne(dropdown::class);
    }

    public function comments()
    {
        return $this->hasMany(comment::class);
    }
}
