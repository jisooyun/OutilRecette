@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-center">CRÉATION D'UN COMPTE RENDU</h1>


        <!-- {!! Form::open(['method' => 'POST']) !!} -->
        {!! Form::open(['url' => route('CR.store'), 'method' => 'POST', 'files' => 'TRUE']) !!}

        <h4>PAR : {{\Illuminate\Support\Facades\Auth::user()->name}}</h4>


        <h3 class="text-center bleu">INFOS</h3>

        <div class="form-group tableau">
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
            {!! Form::text('liens', null, [
            'class' => 'form-control',
            'placeholder' => 'Liens relatifs']) !!}
        </div>

        <div class="form-group">
            <h5>Lundi
            {!! Form::text('lundi', null, [
            'class' => 'form-control',
            'placeholder' => 'Tâches effectuées']) !!}</h5>

        </div>

        <div class="form-group">
            <h5>Mardi
                {!! Form::text('mardi', null, [
                'class' => 'form-control',
                'placeholder' => 'Tâches effectuées']) !!}</h5>

        </div>


        <div class="form-group">
            <h5>Mercredi
                {!! Form::text('mercredi', null, [
                'class' => 'form-control',
                'placeholder' => 'Tâches effectuées']) !!}</h5>

        </div>


        <div class="form-group">
            <h5>Jeudi
                {!! Form::text('jeudi', null, [
                'class' => 'form-control',
                'placeholder' => 'Tâches effectuées']) !!}</h5>

        </div>


        <div class="form-group">
            <h5>Vendredi
                {!! Form::text('vendredi', null, [
                'class' => 'form-control',
                'placeholder' => 'Tâches effectuées']) !!}</h5>

        </div>


        <div class="form-group">
            <h5>Samedi
                {!! Form::text('samedi', null, [
                'class' => 'form-control',
                'placeholder' => 'Tâches effectuées']) !!}</h5>

        </div>


        <div class="form-group">
            <h5>Dimanche
                {!! Form::text('dimanche', null, [
                'class' => 'form-control',
                'placeholder' => 'Tâches effectuées']) !!}</h5>

        </div>

        <h3 class="text-center">GANTT A JOUR </h3>
        <div class="form-group">
            {!! Form::file('gantt',null,['class'=>'form-control']) !!}
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
            {!! Form::textarea('metier', null, [
            'class' => 'form-control',
            'placeholder' => 'Brief métier']) !!}
        </div>



        <div class="form-group">
            {!! Form::text('client', null, [
            'class' => 'form-control',
            'placeholder' => 'Informations dépendantes du client']) !!}
        </div>

        {{ Form::hidden('invisible', Request::segment(3) ) }}


        {!! Form::submit('Envoyer', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}
    </div>
@endsection
