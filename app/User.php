<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

//Acrescenta a classe de verificação de email
use Illuminate\Contracts\Auth\MustVerifyEmail;

//Declara que vamos usar o Uuid
use App\Traits\Uuids;


class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    use Uuids;// Obriga a classe a usar o Uuid
    public $incrementing= false ; // Declara que não vamos usar o autoincremento

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
