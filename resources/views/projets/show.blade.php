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

                </div>
            </div>
        </div>



            <div class="col-md-5">
            <div class="panel panel-warning">
                <div class="panel-heading"> Equipe
                    <a href="{{route('metier.show', $projet->id)}}">
                        <span class="glyphicon glyphicon-edit pull-right" aria-hidden="true"></span>
                    </a> </div>
                <div class="panel-body">
                  @foreach ($metiers as $metier)
                    - {{$metier->membre}} : {{$metier->metier}}
                  @endforeach
                    <!-- - premier métier : nom du membre <br>
                    - deuxième métier : nom du membre <br> -->

                </div>
        </div>
                </div>

                <div class="col-md-5">
                <div class="panel panel-danger">
                    <div class="panel-heading"><a href=""> Générer un bon de livraison </a></div>
                </div>
            </div>
            <div class="col-md-5">
              <div class="panel panel-info">
                  <div class="panel-heading"><a target="_blank" href="{{route('recettage.show', $projet->id)}}">  Cahier de Recettage </a></div>
              </div>
            </div>

            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading"> Liste des compte-rendus
                        <a href="{{route('projets.create', $projet->id)}}">
                            <span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
                        </a>
                    </div>

                    <div class="panel-body">

                        @foreach ($crsT as $cr)

                            <a href="{{route('CR.single.show', [$cr->id , $cr->id_projet])}}">
                                compte rendu n°{{$cr->id}} |  {{$cr->created_at}}  <a href="{{route('CR.edit', $projet->id)}}">
                                    <span class="glyphicon glyphicon-edit pull-right" aria-hidden="true"></span>
                                </a>
                            </a>
                            <br>

                        @endforeach
                    </div>
                </div>
            </div>

    </div>
</div>

@endsection
