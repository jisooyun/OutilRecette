<!-- @extends('layouts.app') -->

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">Compte-rendus du projet
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
