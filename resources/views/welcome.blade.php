@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <a href="{{route('projets.create')}}">
                      <button class="btn btn-info">
                        Création de projet
                      </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
