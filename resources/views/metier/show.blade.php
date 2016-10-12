@extends('layouts.app')

@section('content')

<div class="container-fluid">
{!! Form::open(['url' => route('metier.store'), 'method' => 'POST', 'files' => true]) !!}


    <h4>Nouveau membre</h4>
    <div class="form-group">
        {!! Form::text('nom', null, [
        'class' => 'form-control',
        'placeholder' => 'NOM']) !!}

    </div>
    <h5>
        Graphiste {!!  Form::radio('metier', 'Graphiste') !!}
        Dev-front {!!  Form::radio('metier', 'front') !!}
        Dev-back {!!  Form::radio('metier', 'back') !!}
        UX {!! Form::radio('metier', 'UX' ) !!}
    </h5>
    {{ Form::hidden('role', '1' ) }}
    {{ Form::hidden('id_projet', $projet->id) }}
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
