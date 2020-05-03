<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Financial extends Model
{
//    protected $fillable =['student_number' , 'data'];

    public function user()
    {
        return  $this->belongsTo(User::class);
    }
}
