@extends('layouts.app')

@section('content')


    <div class="container">

        <div class="adresseclient col-md-offset-8">
            BON DE LIVRAISON N° : 1 <br><br>

            Adresse de livraison <br>
            Destinataire : Nom du client <br>
            Adresse : 2 rue François Couperin <br>
            Pays : France <br>
            Téléphone : XX XX XX XX XX <br>
            <br><br>
        </div>
        <br>

    <ul class="list-group col-md-10 col-md-offset-1">
        <li class="list-group-item active">Désignation</li>
        <li class="list-group-item"> {{ $projet->name }}</li>
    </ul>

        <br><br><br><br><br><br><br><br><br>
        <div class="date col-md-offset-1">
        Fait le : <br>
            Signature :
        </div>

    </div>



    @endsection
