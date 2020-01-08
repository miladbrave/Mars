<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public function exam()
    {
        return $this->belongsTo(exam::class);
    }

    public function university()
    {
        return $this->belongsTo(university::class);
    }

    public function replies()
    {
        return $this->hasmany(comment::class,'parent_id');
    }
}
