<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Foundation\Auth\Offer as Authenticatable;
use Illuminate\Database\Eloquent\Model;

Relation::morphMap([
    'Terre' => Terre::class
]);

Relation::morphMap([
    'Appartement' => Appartement::class
]);
Relation::morphMap([
    'Villa' => Villa::class
]);

class Offer extends Model
{

    //
    protected $fillable = [
        'title',
        'surfface',
        'prix',
        'adresse',
        'offertable_id',
        'offertable_type',
        'create_by_user_id',
    ];

    public function offertable()
    {
        return $this->morphTo();
    }

    public function createByUser(){
        return $this->belongsTo(User::class);
    }

    public function buyByUser(){
        return $this->belongsToMany(User::class);
    }
}
