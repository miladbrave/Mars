<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    public function photo()
    {
        return $this->hasOne(photo::class,'news_id');
    }
}
