<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terre extends Model
{
    //
    public function offers(){
        return $this->morphMany(Offer::class , 'offertable');
    }
}
