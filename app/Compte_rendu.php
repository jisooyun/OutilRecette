<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte_rendu extends Model
{
    //
    protected $fillable = [
        'infos',
        'global',
        'positif',
        'lundi',
        'mardi',
        'mercredi',
        'jeudi',
        'vendredi',
        'samedi',
        'dimanche',
        'negatif',
        'client',
        'piece-joint',
        'id_projet'
    ];

    // public function id_projet() {
    //     return $this->belongsTo('App\Models\Projet');
    // }
}
