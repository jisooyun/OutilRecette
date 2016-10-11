@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Compte-rendus du projet</div>

                    <div class="panel-body">
                        <a href="{{route('CR.create')}}">CREER COMPTE RENDU </a>
                        <hr>
                        <p> {{$cr->created_at}} </p>

                            {{$cr->infos}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection