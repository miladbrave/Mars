<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    protected $uploads = '/photo/';

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

    public function exams()
    {
        return $this->belongsToMany(exam::class);
    }

    public function evales()
    {
        return $this->belongsTo(evale::class);
    }

    public function news()
    {
        return $this->belongsTo(news::class);
    }

    public function slider()
    {
        return $this->belongsTo(Slider::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

}
