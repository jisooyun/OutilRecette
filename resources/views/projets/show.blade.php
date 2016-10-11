@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Projet n°{{$projet->id}} | {{$projet->name}} </div>

                <div class="panel-body">
                      <ul>
                        @if( $projet->gaant == 1)
                        <p>
                          <li>
                            Planning de Gantt : OUI
                          </li>
                        </p>
                            @else
                              <p>
                              <li>
                                  Planning de Gantt : NON
                              </li>
                              </p>
                        @endif
                        @if( $projet->cdc == 1)
                        <p>
                          <li>
                            Cahier des charges : OUI
                          </li>
                        </p>
                            @else
                                <p>
                                <li>
                                    Cahier des charges : NON
                                </li>
                                </p>
                        @endif
                        @if( $projet->contenu == 1)
                        <p>
                          <li>
                            Présence de contenus : OUI
                          </li>
                        </p>
                            @else
                                <p>
                                <li>
                                    Présence de contenus : NON
                                </li>
                                </p>
                        @endif
                        @if( $projet->graph == 1)
                        <p>
                          <li>
                            Pistes graphiques : OUI
                          </li>
                        </p>
                            @else
                                <p>
                                <li>
                                    Pistes graphiques: NON
                                </li>
                                </p>
                        @endif
                      </ul>


                      <a href="{{route('CR.show', $projet->id)}}">
                        <button class="btn btn-danger">
                          Voir les compte rendu
                        </button>
                      </a>

                      <!-- <a href="{{route('CR.create', $projet->id)}}"> -->
                      <a>
                        {!! Form::open(['url' => route('CR.create'), 'method' => 'POST']) !!}
                        {{ Form::hidden('invisible', $projet->id) }}
                        <!-- <button class="btn btn-info"> -->
                          {!! Form::submit('Envoyer', ['class' => 'btn btn-info']) !!}
                          Faire un compte rendu
                        <!-- </button> -->
                      </a>

                      <a href="{{route('projets.edit', $projet->id)}}">
                        <button class="btn btn-success">
                          Modifer Projet
                        </button>
                      </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
