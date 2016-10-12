@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading"> Projets en cours
                    <a href="{{route('projets.create')}}">
                        <span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
                    </a>
                </div>

                <div class="panel-body">
                    @foreach ($projets as $projet)
                     @if($projet->archive == 0)

                        <a href="{{route('projets.show', $projet->id)}}"> {{$projet->name}}</a> <br>
                      @endif
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-danger">
                <div class="panel-heading"> Projets archivés </div>
                <div class="panel-body">
                    @foreach ($projets as $projet)
                        @if($projet->archive == 1)
                            <a href="{{route('projets.show', $projet->id)}}"> {{$projet->name}}</a>
                            <br>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
