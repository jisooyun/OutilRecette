<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Compte_rendu;
use App\Projet;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


class CompteRenduController extends Controller
{

     /**
     * Display the specified resource.
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $request->input("id");

        return view('CR.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $users = User::all();

        return view('CR.create')->with(compact('users'));
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
        // $cr = new Compte_rendu;
        //     $cr->global = $request->global;
        //     $cr->description = $request->infos;
        //     $post->save();

            $cr = Compte_rendu::create([
              'global' => $request->global,
              'infos' => $request->infos,
        ]);

        return redirect('/');
        // return redirect()->route('single_projet', $projet->id);
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
//        $crs = Compte_rendu::where('id_projet' ,$id);

        $crsT = [];
        foreach($crs as $cr){
            if($cr->id_projet==$id){
                array_push($crsT, $cr);
            }
        }


        return view('CR.show')->with(compact('crsT'));

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
