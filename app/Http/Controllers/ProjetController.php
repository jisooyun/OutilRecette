<?php

namespace App\Http\Controllers;

use App\Metier;
use Illuminate\Http\Request;
use App\Projet;
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
        //
        $projet = Projet::create([
          'name' => $request->nom_projet,
          'gaant' => $request->gaant,
          'cdc' => $request->cdc,
          'contenu' => $request->contenu,
          'graph' => $request->graph,

        $membre = Metier::create([
            'membre' => $request->nom,
        ])
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
        //
        $projet = Projet::find($id);
        if(!$projet) {
            return redirect()->to('/projets');
        }

        $membre = Metier::find($id);


        return view('projets.show')->with(compact('projet'));
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
