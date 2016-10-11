@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Projet n°{{$projet->id}}</div>

                <div class="panel-body">

                    <h3>Projet {{$projet->name}} </h3>
                      <hr />

                      <p>
                        Il y a
                      </p>
                      <ul>
                        @if( $projet->gaant == 1)
                        <p>
                          <li>
                            Un gant
                          </li>
                        </p>
                        @endif
                        @if( $projet->cdc == 1)
                        <p>
                          <li>
                            Un cdc
                          </li>
                        </p>
                        @endif
                        @if( $projet->contenu == 1)
                        <p>
                          <li>
                            Un du contenu
                          </li>
                        </p>
                        @endif
                        @if( $projet->graph == 1)
                        <p>
                          <li>
                            Un des visu
                          </li>
                        </p>
                        @endif
                      </ul>


                      <a href="{{route('CR.show', $projet->id)}}">
                        <button class="btn btn-danger">
                          Voir les compte rendu
                        </button>
                      </a>

                      <a href="{{route('CR.create', $projet->id)}}">
                        <button class="btn btn-info">
                          Faire un compte rendu
                        </button>
                      </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
