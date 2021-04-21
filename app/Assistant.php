<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistant extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address',
        'tel',
    ];



    public function users(){
        return $this->morphMany(User::class , 'usertable');
    }
}
