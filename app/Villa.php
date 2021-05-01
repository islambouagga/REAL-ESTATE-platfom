<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Villa extends Model
{
    public function offers(){
        return $this->morphMany(Offer::class , 'offertable');
}
