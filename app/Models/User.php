<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table='users';
    protected $fillable=[
        'email',
        'password'

    ];

    public function setPasswordAttribute($password)
    {
       return $this->attributes['password']=Hash::make($password);
    }
}
