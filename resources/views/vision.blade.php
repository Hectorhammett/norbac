@extends('layout')

@section('title','Visión')

@section('mainContent')
    <div class="row hidden-xs">
        <div class="col-sm-12">
            <h1 class="main-header">Visión</h1>
            <p class="main-text">
                Norbac pretende convertirse en la empresa líder para el manejo integral de

                residuos de manejo especial en Baja California, empleando tecnología de

                vanguardia y minimizando los impactos ambientales asociados, brindando la

                opción más amigable con el ambiente.
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