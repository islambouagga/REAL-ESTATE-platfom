<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Villa extends Model
{

    protected $fillable = [
        'etage',
        'chombre',
        'addrbalconess',
        'toilettes',
        'cuisine',
        'garage',



    ];
    public function offers(){
        return $this->morphMany(Offer::class , 'offertable');
    }
}
