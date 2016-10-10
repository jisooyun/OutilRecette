@extends('layouts.app')

@section('content')


{!! Form::open(['route' => 'projet.store', 'method' => 'POST']) !!}

{!! Form::text('nom_projet', null, [
    'class' => 'form-control',
    'placeholder' => 'Nom du projet'
]) !!}

{!! Form::submit('Envoyer', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}