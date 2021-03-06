@extends('layouts.app')

@section('content')

<div class="container-fluid">
{!! Form::open(['url' => route('projets.store'), 'method' => 'POST', 'files' => true]) !!}

<div class="form-group">
{!! Form::text('nom_projet', null, [
    'class' => 'form-control',
    'placeholder' => 'Nom du projet'
]) !!}
</div>

<div class="form-group">
{!! Form::text('debut', null, [
    'class' => 'debut',
    'placeholder' => 'Début du projet'
]) !!}
</div>

<div class="form-group">
{!! Form::text('fin', null, [
    'class' => 'fin',
    'placeholder' => 'Fin du projet'
]) !!}
</div>

<div class="form-group">
    <p>Cahier des Charges</p>
    <h5>Oui {!!  Form::radio('cdc', '1') !!}
        Non {!!  Form::radio('cdc', '0', true) !!}</h5>
</div>

<p>Si oui,</p>
<div class="form-group">

    {!! Form::file('cdcs',null,['class'=>'form-control']) !!}

</div>

<div class="form-group">
    <p>Planning de Gantt</p>
    <h5>Oui
        {!!  Form::radio('gaant', '1') !!}
        Non {!!  Form::radio('gaant', '0', true) !!}</h5>
</div>

<div class="form-group">
    <p>Présence de contenu</p>
    <h5>Oui
        {!!  Form::radio('contenu', '1') !!}
        Non {!!  Form::radio('contenu', '0', true) !!}</h5>
</div>

<div class="form-group">
    <p>Graphisme</p>
    <h5>Oui
        {!!  Form::radio('graph', '1') !!}
        Non {!!  Form::radio('graph', '0', true) !!}</h5>
</div>

    <h4>Chef de projet</h4>
    <div class="form-group">
        {!! Form::text('nom', null, [
        'class' => 'form-control',
        'placeholder' => 'NOM']) !!}

    </div>
    <!-- <h5>
        Graphiste {!!  Form::radio('metier', 'Graphiste') !!}
        Dev-front {!!  Form::radio('metier', 'front') !!}
        Dev-back {!!  Form::radio('metier', 'back') !!}
        UX {!! Form::radio('metier', 'UX' ) !!}
    </h5> -->
    {{ Form::hidden('role', '1' ) }}
    <div class="form-group">
        {!! Form::text('mail', null, [
        'class' => 'form-control',
        'placeholder' => 'Email']) !!}
    </div>




    <div class="form-group">{!! Form::submit('Envoyer', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}
</div>

</div>
    @endsection
