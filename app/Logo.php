<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    protected $uploads = '/photo/';
    public function getPathAttribute($photo)
    {
        return $this->uploads . $photo;
    }

    public function university()
    {
        return $this->belongsTo(university::class);
    }
}
