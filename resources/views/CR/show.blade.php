@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Compte-rendus du projet</div>

                    <div class="panel-body">
                        <a href="{{route('CR.create')}}">
                            <button class="btn btn-info">
                                Faire un compte rendu
                            </button>
                        </a>
                        <hr />
                        <p> Liste de CR </p>
                         @foreach ($crsT as $cr)

                            {{$cr->created_at}} <br>
                            <a href="{{route('CR.single.show', [$cr->id , $cr->id_projet])}}">
                              <button class="btn btn-info">
                                Voir les compte rendu
                              </button>
                            </a>
                            <br />

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
