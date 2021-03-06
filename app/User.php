<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

Relation::morphMap([
    'Admin' => Admin::class
]);

Relation::morphMap([
    'Assistant' => Assistant::class
]);
Relation::morphMap([
    'Client' => Client::class
]);


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email',
        'nom',
        'prenom',
        'password',
        'usertable_id',
        'usertable_type',
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

    public function usertable()
    {
        return $this->morphTo();
    }

    public function createOffer(){
        return $this->hasMany(Offer::class,'create_by_user_id');
    }
    public function buyOffers(){
        return $this->belongsToMany(Offer::class);
    }

}
