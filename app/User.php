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
        'fullname','usersname','lead', 'email','image','birthday','dayin','vacation', 'position', 'password', 'id_department', 'staff_code'
    ];

    public function department()
    {
        return $this->belongsTo('App\Department', 'id_department', 'id');
    }
    public function position()
    {
        return $this->belongsTo('App\position', 'id_position', 'id');
    }
    public function roles()
    {
        return $this->belongsTo('App\Role', 'role', 'id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'idUser', 'id');
    }

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
}
