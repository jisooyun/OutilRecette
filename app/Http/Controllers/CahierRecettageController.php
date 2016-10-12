<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Projet;
use App\Metier;
use App\User;
Use App\Compte_rendu;

class CahierRecettageController extends Controller
{
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {

      $projet = Projet::find($id);
      $metiers = Metier::all();
      $Crs = Compte_rendu::all();

      $crs = [];
      foreach($Crs as $cr){
        if($cr->id_projet == $id){
          array_push($crs, $cr);
        }
      }

      $met = [];
      foreach ($metiers as $metier) {
        if ($metier->projet == $id) {
          array_push($met, $metier);
        }
      }

      return view('recettage.show')->with(compact('projet', 'met', 'crs', 'test'));

  }

}
