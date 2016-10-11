@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"> Liste de projets </div>

                <div class="panel-body">
                  Projet en cours
                  <br />
                    @foreach ($projets as $projet)
                     @if($projet->archive == 0)

                        <a href="{{route('projets.show', $projet->id)}}"> {{$projet->name}}</a> <br>
                      @endif
                    @endforeach
                    <hr />
                    Projet fini
                    <br />
                    @foreach ($projets as $projet)
                     @if($projet->archive == 1)
                        <a href="{{route('projets.show', $projet->id)}}"> {{$projet->name}}</a> <br>
                      @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
