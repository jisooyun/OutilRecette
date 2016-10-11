@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"> Liste de projets </div>

                <div class="panel-body">
                    @foreach ($projets as $projet)

                        <a href="{{route('projets.show', $projet->id)}}"> {{$projet->name}}</a> <br>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
