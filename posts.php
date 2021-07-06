<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    //
    use Notifiable;
    const CREATED_AT = 'creationDate';
    const UPDATED_AT = 'lastEdit';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'body', 'title', 'password','username','location'
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
}
