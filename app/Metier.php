<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metier extends Model
{
    //
    public $timestamps = false;


    protected $fillable = [
        'membre',
        'metier'
    ];
}
