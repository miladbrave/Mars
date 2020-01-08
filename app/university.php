<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class university extends Model
{
    public function photos()
    {
        return $this->belongsToMany(photo::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
