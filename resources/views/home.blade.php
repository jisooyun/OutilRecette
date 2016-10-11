@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tableau de bord</div>

                <div class="panel-body">

                    <p> Liste de projets </p>
                    @foreach ($projets as $projet)
                    <hr />
                      {{$projet->name}}
                      {{$projet->graph}}
                      <a href="{{route('projets.show', $projet->id)}}">
                        <button class="btn btn-info">
                          Voir le projet
                        </button>
                      </a>
                      <hr />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
