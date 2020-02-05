<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exam extends Model
{
    public function comments()
    {
        return $this->hasMany(comment::class);
    }

    public function photos()
    {
        return $this->belongsToMany(photo::class);
    }
}
