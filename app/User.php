<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Events\UserRegistered;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function register($attributes)
    {
        $user = static::create($attributes);

        event(new UserRegistered($user));

        return $user;
    }

    public function stats()
    {
        return new Statistics($this);
    }
}
