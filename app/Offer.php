<?php

namespace App;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Foundation\Auth\Offer as Authenticatable;
use Illuminate\Database\Eloquent\Model;
Relation::morphMap([
    'Terre'=>Terre::class
]);

Relation::morphMap([
    'Appartement'=>Appartement::class
]);
class Offer extends Model
{

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
