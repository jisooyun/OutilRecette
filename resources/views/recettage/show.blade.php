@extends('layouts.app')

@section('content')
<div class="container">
  Nom du projet : {{$projet->name}}
  <br />
  Créé le : {{$projet->debut}}
  <hr />
  Chef de projet :
  {{Auth::user()->name}} <br />
  Email : {{Auth::user()->email}}

  <hr />
  Membre de l'equipe : <br />
  Back :
  @foreach($met as $metier)
    {{$metier->membre}} : {{$metier->metier}}<br />
  @endforeach

  <hr />

  Compte Rendu :
  <br />
  @foreach($crs as $cr)
    <div class="panel-heading">Compte-rendu du {{$cr->created_at}}
    </div>

    <div class="panel-body">

        <br><br>
        <div class="text-center">
            <span class="label label-danger"> Informations importantes !</span>
            <p>
                {{$cr->infos}}
            </p>
        </div>

        <br><br>
        <div class="alert alert-info text-center" role="alert"> GLOBAL </div>

        <p>{{$cr->global}} </p><br>

        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Point positif de la semaine :<br>
        {{$cr->positif}}<br>

        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Point négatif de la semaine :
        <br>
        {{$cr->negatif}} <br><br>

        <div class="alert alert-warning text-center" role="alert"> CYCLE </div>
        <ul class="list-group">
            <div class="list-group-item">
                <h4 class="list-group-item-heading">Lundi</h4>
                <p class="list-group-item-text">{{$cr->lundi}}</p>
            </div>
            <div class="list-group-item">
                <h4 class="list-group-item-heading">Mardi</h4>
                <p class="list-group-item-text">{{$cr->mardi}}</p>
            </div>
            <div class="list-group-item">
                <h4 class="list-group-item-heading">Mercredi</h4>
                <p class="list-group-item-text">{{$cr->mercredi}}</p>
            </div>
            <div class="list-group-item">
                <h4 class="list-group-item-heading">Jeudi</h4>
                <p class="list-group-item-text">{{$cr->jeudi}}</p>
            </div>
            <div class="list-group-item">
                <h4 class="list-group-item-heading">Vendredi</h4>
                <p class="list-group-item-text">{{$cr->vendredi}}</p>
            </div>
            <div class="list-group-item">
                <h4 class="list-group-item-heading">Samedi</h4>
                <p class="list-group-item-text">{{$cr->samedi}}</p>
            </div>
            <div class="list-group-item">
                <h4 class="list-group-item-heading">Dimanche</h4>
                <p class="list-group-item-text">{{$cr->dimanche}}</p>
            </div>
        </ul>

        <div class="alert alert-danger text-center" role="alert"> A RECEVOIR DE LA PART DU CLIENT </div>
        <p>{{$cr->client}}</p>

        <div class="alert alert-success text-center" role="alert"> PLANNING DE GANTT A JOUR </div>
        {{$cr->gantt}}

    </div>
  @endforeach
</div>

@endsection
