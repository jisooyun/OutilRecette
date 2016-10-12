<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Metier;
use App\Projet;

class MetiersController extends Controller
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

      return view('metier.show')->with(compact('projet'));
  }

    //
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


      if($request->metier == 'Graphiste'){
        $membre = Metier::create([
            'membre' => $request->nom,
            'mail' => $request->mail,
            'projet' => $request->id_projet,
            'role' => $request->role,
            'metier' => 'Graphiste'
        ]);
      }elseif($request->metier == 'front'){
        $membre = Metier::create([
            'membre' => $request->nom,
            'mail' => $request->mail,
            'projet' => $request->id_projet,
            'role' => $request->role,
            'metier' => 'front'
        ]);
      }elseif($request->metier == 'back'){
        $membre = Metier::create([
            'membre' => $request->nom,
            'mail' => $request->mail,
            'projet' => $request->id_projet,
            'role' => $request->role,
            'metier' => 'back'
        ]);
      }else{
        $membre = Metier::create([
            'membre' => $request->nom,
            'mail' => $request->mail,
            'projet' => $request->id_projet,
            'role' => $request->role,
            'metier' => 'UX'
        ]);
      }

      return redirect()->route('home.index');
    // return redirect('home.inde');
    }
}
