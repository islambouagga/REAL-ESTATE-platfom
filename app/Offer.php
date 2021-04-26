<?php

namespace App;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Foundation\Auth\offer as Authenticatable;
use Illuminate\Notifications\Notifiable;

Relation::morphMap([
    'Terre'=>Terre::class
]);

class Offer extends Authenticatable


{    use Notifiable;

    //
     protected $fillable = [
        'surfface',
        'prix',
        'adresse',
        'offertable_id',
        'offertable_type',
    ];

       public function offertable(){
       return $this->morphTo();
}}