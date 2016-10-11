@extends('layouts.app')

@section('content')

<div class="container-fluid">
{!! Form::open(['url' => route('projets.store'), 'method' => 'POST']) !!}

<div class="form-group">
{!! Form::text('nom_projet', null, [
    'class' => 'form-control',
    'placeholder' => 'Nom du projet'
]) !!}
</div>

<div class="form-group">
    <p>Cahier des Charges</p>
    <h5>Oui
        {!!  Form::checkbox('agree', '1') !!}
    Non {!!  Form::checkbox('agree', '0') !!}</h5>
</div>

<div class="form-group">
    <p>Planning de Gantt</p>
    <h5>Oui
        {!!  Form::checkbox('agree', '1') !!}
        Non {!!  Form::checkbox('agree', '0') !!}</h5>
</div>

<div class="form-group">
    <p>Présence de contenu</p>
    <h5>Oui
        {!!  Form::checkbox('agree', '1') !!}
        Non {!!  Form::checkbox('agree', '0') !!}</h5>
</div>

<div class="form-group">
    <p>Graphisme</p>
    <h5>Oui
        {!!  Form::checkbox('agree', '1') !!}
        Non {!!  Form::checkbox('agree', '0') !!}</h5>
</div>

<div class="form-group">{!! Form::submit('Envoyer', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}
</div>
</div>
    @endsection
