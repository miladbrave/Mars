<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    protected $uploads = '/storage/photos/';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getPathAttribute($photo)
    {
        return $this->uploads . $photo;
    }

    public function universitys()
    {
        return $this->belongsToMany(university::class);
    }

    public function evales()
    {
        return $this->belongsToMany(evale::class);
    }

}
