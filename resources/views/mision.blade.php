@extends('layout')

@section('title','Misión')

@section('mainContent')
    <div class="row hidden-xs">
        <div class="col-sm-12">
            <h1 class="main-header">Misión</h1>
            <p class="main-text">
                Ofrecer a nuestros clientes la mejor opción de servicio de recolección y manejo

                de residuos de manejo especial, en cumplimiento con la normatividad

                ambiental vigente, bajo los conceptos de calidad y precios competitivos de

                mercado.
            </p>
        </div>
    </div>
    <div class="row hidden-xs">
        <div class="col-sm-12">
            <div class="gears-group">
                <h1 class="main-header pull-left gears-text">En construcción</h1>
                <img class="img-responsive gears hidden-xs" src="{{ asset('img/settings-gears.png') }}"/>
            </div>
        </div>
    </div>
    <div class="row visible-xs">
        <div class="col-sm-12">
           <h1 class="main-header text-center">En construcción</h1>
           <img class="img-responsive gears center-block" src="{{ asset('img/settings-gears.png') }}"/>
        </div>
    </div>
@stop