<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resume extends Model
{
    protected $fillable = ['filename'];

    public function evale(){
        return $this->belongsTo(evale::class);
    }
}
