@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-success">
                <div class="panel-heading">Projet n°{{$projet->id}} | {{$projet->name}}
                    <a href="{{route('projets.edit', $projet->id)}}">
                        <span class="glyphicon glyphicon-edit pull-right" aria-hidden="true"></span>
                    </a>
                 </div>

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

                    <a href="{{route('CR.edit', $projet->id)}}">

                        <!-- {!! Form::open(['url' => route('CR.create' , $projet->id), 'method' => 'PUT']) !!} -->
                        <!-- {{ Form::hidden('invisible', $projet->id) }} -->
                        <button class="btn btn-info">
                            <!-- {!! Form::submit('Faire un compte rendu', ['class' => 'btn btn-info']) !!} -->
                            Faire un compte rendu
                        </button>
                    </a>

                </div>
            </div>
        </div>



            <div class="col-md-5">
            <div class="panel panel-warning">
                <div class="panel-heading"> Equipe
                    <a href="{{route('projets.edit', $projet->id)}}">
                        <span class="glyphicon glyphicon-edit pull-right" aria-hidden="true"></span>
                    </a> </div>
                <div class="panel-body">
                    - premier métier : nom du membre <br>
                    - deuxième métier : nom du membre <br>

                </div>
        </div>
                </div>

                <div class="col-md-5">
                <div class="panel panel-danger">
                    <div class="panel-heading"><a href=""> Générer un bon de livraison </a></div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading"> Liste des compte-rendus
                        <a href="{{route('CR.create')}}">
                            <span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
                        </a>
                    </div>

                    <div class="panel-body">

                        @foreach ($crsT as $cr)

                            <a href="{{route('CR.single.show', [$cr->id , $cr->id_projet])}}">
                                compte rendu n°{{$cr->id}} |  {{$cr->created_at}}
                            </a>
                            <br>

                        @endforeach
                    </div>
                </div>
            </div>

    </div>
</div>

@endsection
