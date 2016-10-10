@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-center">CRÉER UN COMPTE RENDU</h1>
        {!! Form::open([ 'method' => 'POST']) !!}

        <h4>Auteur : {{\Illuminate\Support\Facades\Auth::user()->name}}</h4>{{--Récupération du nom de l'user--}}

        <div class="form-group">
            {!! Form::text('titre', null, [
                'class' => 'form-control',
                'placeholder' => 'Titre de l\'article'
            ]) !!}
        </div>

        <div class="form-group">
            {!! Form::textarea('contenu', null, [
            'class' => 'form-control',
            'placeholder' => 'Votre article']) !!}
        </div>

        {!! Form::submit('Envoyer', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}
    </div>
@endsection
