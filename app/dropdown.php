<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dropdown extends Model
{
    public function test()
    {
        return $this->belongsTo(test::class);
    }
}
