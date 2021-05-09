<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //

    protected $fillable = [
        'address',
        'tel',
    ];
    public function users(){
        return $this->morphMany(User::class , 'usertable');
    }


}
