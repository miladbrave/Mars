<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','city','national_code','birthday'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function universitys()
    {
        return $this->hasMany(university::class);
    }

    public function photos()
    {
        return $this->hasMany(photo::class);
    }

    public function financial()
    {
        return $this->hasMany(financial::class);
    }

    public function classtime()
    {
        return $this->hasMany(classtime::class);
    }

    public function isAdmin(){
        $user = Auth()->user();
            if($user->admin == 'admin'){
                return true;
            }
        return false;
    }

}
