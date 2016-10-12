@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">Compte-rendu n°{{$cr->id}} | {{$cr->created_at}}
                        <a href="{{route('CR.create')}}">
                            <span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
                        </a>
                    </div>

                    <div class="panel-body">

                        <div class="text-center">
                            <span class="label label-danger"> Informations importantes !</span>
                            <p>
                                {{$cr->infos}}
                            </p>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
