<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role','first_name','last_name', 'email', 'DOB','password',
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

    public function gym() {
        return $this->hasOne(Gym::class);
    }

    public function role() {
        return $this->hasOne(Role::class);
    }

    public function attribute() {
        return $this->hasOne(Attribute::class);
    }

    public function join(Gym $gym) {
        return $this->listOfFighters()->save($gym);
    }


    public function listOfFighters() {
        return $this->belongsToMany(Gym::class, 'list_of_fighters', 'user_id', 'gym_id');
    }

}
