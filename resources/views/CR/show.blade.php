@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Compte-rendus du projet</div>

                    <div class="panel-body">
                        <a href="{{route('CR.create')}}">CREER COMPTE RENDU </a>
                        <hr />
                        <p> Liste de CR </p>
                         @foreach ($crsT as $cr)
                            {{--<a href="{{route('CR.single', $cr->id)}}">{{$cr->created_at}}</a> <br>--}}
                            {{$cr->created_at}} <br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
