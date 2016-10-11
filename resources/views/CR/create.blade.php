@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-center">CRÉATION D'UN COMPTE RENDU</h1>


        <!-- {!! Form::open(['method' => 'POST']) !!} -->
        {!! Form::open(['url' => route('CR.store'), 'method' => 'POST']) !!}

        <h4>PAR : {{\Illuminate\Support\Facades\Auth::user()->name}}</h4>

        <h3 class="text-center">INFOS</h3>

        <div class="form-group">
            {!! Form::textarea('infos', null, [
            'class' => 'form-control',
            'placeholder' => 'Compte rendu global du cycle']) !!}
        </div>

        <h3 class="text-center">GLOBAL</h3>

        <div class="form-group">
            {!! Form::textarea('global', null, [
            'class' => 'form-control',
            'placeholder' => 'Compte rendu global du cycle']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('positif', null, [
            'class' => 'form-control',
            'placeholder' => 'Les points positifs']) !!}
        </div>


        <div class="form-group">
            {!! Form::text('negatif', null, [
            'class' => 'form-control',
            'placeholder' => 'Les points négatifs']) !!}
        </div>

        <div class="form-group">
            {!! Form::text('piece-joint', null, [
            'class' => 'form-control',
            'placeholder' => 'Pièces jointes']) !!}
        </div>

        <div class="form-group">
            {!! Form::text('liens', null, [
            'class' => 'form-control',
            'placeholder' => 'Liens relatifs']) !!}
        </div>

        <h3 class="text-center">MÉTIER</h3>


        <div class="form-group">
          <p> UX  {!! Form::radio('UX', 'value')!!}
          Graphisme  {!! Form::radio('graphisme', 'value')!!}
          Developpement  {!! Form::radio('dev', 'value')!!}
          Front  {!! Form::radio('front', 'value')!!}
          Market  {!! Form::radio('market', 'value')!!}
          </p>

        </div>


        <div class="form-group">
            {!! Form::textarea('UX', null, [
            'class' => 'form-control',
            'placeholder' => 'Brief métier UX']) !!}
        </div>

        <div class="form-group">
            {!! Form::textarea('graphisme', null, [
            'class' => 'form-control',
            'placeholder' => 'Brief métier graphisme']) !!}
        </div>

        <div class="form-group">
            {!! Form::textarea('dev', null, [
            'class' => 'form-control',
            'placeholder' => 'Brief métier développement']) !!}
        </div>

        <div class="form-group">
            {!! Form::textarea('front', null, [
            'class' => 'form-control',
            'placeholder' => 'Brief métier front']) !!}
        </div>

        <div class="form-group">
            {!! Form::textarea('market', null, [
            'class' => 'form-control',
            'placeholder' => 'Brief métier marketing']) !!}
        </div>

        <div class="form-group">
            {!! Form::text('client', null, [
            'class' => 'form-control',
            'placeholder' => 'Informations dépendantes du client']) !!}
        </div>




        {!! Form::submit('Envoyer', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}
    </div>
@endsection
