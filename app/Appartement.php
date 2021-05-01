<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appartement extends Model
{
    //
    protected $fillable = [
        'etage',
        'chombre',
        'addrbalconess',
        'toilettes',
        'cuisine',
       


    ];
    public function appartements(){
        return $this->morphMany(Offer::class , 'offertable');
    }
}
