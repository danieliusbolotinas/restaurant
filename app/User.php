<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
      'name',
      'last_name',
      'email',
      'password',
      'bday',
      'phone',
      'address',
      'city',
      'zipcode',
      'country',
      'updated_at',
      'created_at',
      'is_admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
     protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo('Role');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function getFullName()
    {
        return $this->name . ' ' . $this->last_name;
    }


    public function isAdmin()
    {
        return (bool) $this->is_admin;
    }


    public function getRememberToken()
    {
        return null; // will not support
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string  $value
     * @return void
     */
    public function setRememberToken($value)
    {
        // will not support
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return null; // will not support
    }

    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();

        if( ! $isRememberTokenAttribute )
        {
            parent::setAttribute($key, $value);
        }
    }

}
