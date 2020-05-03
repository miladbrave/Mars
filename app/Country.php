<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function photos()
    {
        return $this->hasMany(photo::class);
    }
}
