<?php

namespace App\Http\Controllers;

use App\Metier;
use Illuminate\Http\Request;
use App\Projet;
use App\Compte_rendu;
use App\Http\Requests;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $projet = Projet::create([
          'name' => $request->nom_projet,
          'gaant' => $request->gaant,
          'cdc' => $request->cdc,
          'contenu' => $request->contenu,
          'graph' => $request->graph,
          'debut' => $request->debut,
          'fin' => $request->fin,
          'archive' => 0,
            'cdcs' => $request->file('cdcs')->move('../public/pdf', $request->nom_projet.'_cdc')

        ]);

        $membre = Metier::create([
            'membre' => $request->nom,
        ]);

    return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crs = Compte_rendu::all();

        $crsT = [];
        foreach($crs as $cr){
            if($cr->id_projet==$id){
                array_push($crsT, $cr);
            }
        }

        $projet = Projet::find($id);
        if(!$projet) {
            return redirect()->to('/projets');
        }

        $membre = Metier::find($id);


        return view('projets.show')->with(compact('projet', 'crsT'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $projet = Projet::find($id);
        $Metiers = Metier::all();

        $metiers = [];
        foreach($metiers as $metier){
            if($metier->id_projet == $id){
                array_push($metiers, $metier);
            }
        }


        return view('projets.edit')->with(compact('projet', 'metiers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $projet = Projet::find($id);

        // Projet::where('id', $id)
        //       ->update(['name' => "bana"]);

        $projet->name = $request->nom_projet;
        $projet->gaant = $request->gaant;
        $projet->contenu = $request->contenu;
        $projet->graph = $request->graph;
        $projet->archive  = $request->fini;
        $projet->debut = $request->debut;
        $projet->fin = $request->fin;
        $projet->cdcs = $request->file('cdcs')->move('../public/pdf', $request->nom_projet.'_cdcv2');

        $projet->save();
        return redirect()->route('projets.show', $projet->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
