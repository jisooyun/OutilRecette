@extends('layouts.app')

@section('content')

<div class="container-fluid">
{!! Form::open(['url' => route('projets.update', $projet->id), 'method' => 'PUT']) !!}
{{csrf_field()}}
<div class="form-group">
{!! Form::text('nom_projet', $projet->name, [
    'class' => 'form-control',
]) !!}
</div>

<div class="form-group">
    <p>Cahier des Charges</p>
    @if($projet->cdc == 0)
    <h5>Oui {!!  Form::radio('cdc', '1'); !!}
        Non {!!  Form::radio('cdc', '0', true) !!}</h5>
    @else
    <h5>Oui {!!  Form::radio('cdc', '1', true); !!}
        Non {!!  Form::radio('cdc', '0') !!}</h5>
    @endif
</div>

<div class="form-group">
    <p>Planning de Gantt</p>
    @if($projet->gaant == 0)
    <h5>Oui {!!  Form::radio('gaant', '1'); !!}
        Non {!!  Form::radio('gaant', '0', true) !!}</h5>
    @else
    <h5>Oui {!!  Form::radio('gaant', '1', true); !!}
        Non {!!  Form::radio('gaant', '0') !!}</h5>
    @endif
</div>

<div class="form-group">
    <p>Présence de contenu</p>
    @if($projet->contenu == 0)
    <h5>Oui {!!  Form::radio('contenu', '1'); !!}
        Non {!!  Form::radio('contenu', '0', true) !!}</h5>
    @else
    <h5>Oui {!!  Form::radio('contenu', '1', true); !!}
        Non {!!  Form::radio('contenu', '0') !!}</h5>
    @endif
</div>

<div class="form-group">
    <p>Graphisme</p>
    @if($projet->graph == 0)
    <h5>Oui {!!  Form::radio('graph', '1'); !!}
        Non {!!  Form::radio('graph', '0', true) !!}</h5>
    @else
    <h5>Oui {!!  Form::radio('graph', '1', true); !!}
        Non {!!  Form::radio('graph', '0') !!}</h5>
    @endif
</div>

    <h4>ÉQUIPE</h4>
    <div class="form-group">
        {!! Form::text('nom', null, [
        'class' => 'form-control',
        'placeholder' => 'NOM 1']) !!}
    </div>




    <div class="form-group">{!! Form::submit('Envoyer', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}
</div>

</div>
    @endsection
