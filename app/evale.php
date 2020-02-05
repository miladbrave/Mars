<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evale extends Model
{
    public function photo()
    {
        return $this->hasOne(photo::class );
    }
}
