<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tip extends Model
{
    public function tip()
    {
        return $this->belongsTo( User::class);
    }

}
