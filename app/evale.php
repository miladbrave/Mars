<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evale extends Model
{
    public function photos()
    {
        return $this->belongsToMany(photo::class );
    }
}
