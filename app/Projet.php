<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    //
    protected $fillable = [
        'name',
        'gaant',
        'cdc',
        'cdcs',
        'contenu',
        'graph'
    ];

    // si var user depend d'une autre tab/model
    // public function user() {
    //     return $this->belongsTo('App\Models\User');
    // }
}
