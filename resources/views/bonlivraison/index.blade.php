@extends('layouts.app')

@section('content')

    <style>
        input {
            border: none !important;
            box-shadow: none !important;
        }
    </style>


    <div class="container">

        <div class="adresseclient col-md-offset-8">
            BON DE LIVRAISON N° :  <input type="text"><br><br>

            <b>Adresse de livraison</b> <br>
            Destinataire : <input type="text"> <br>
            Adresse :  <input type="text"><br>
            Pays :  <input type="text"><br>
            Téléphone : <input type="text"> <br>
            <br><br>
        </div>
        <br>

    <ul class="list-group col-md-10 col-md-offset-1 input_fields_wrap">
        <li class="list-group-item active">Désignation
            <span class="glyphicon glyphicon-plus pull-right add_field_button" aria-hidden="true"></span>
         </li>
        <li class="list-group-item"><input type="text" class="form-control"></li>
    </ul>

        <div class="row"></div>
        <br><br><br>
        <div class="date col-md-offset-1">
        Fait le : <input type="text"> <br>
            Signature :
        </div>

    </div>



    @endsection
