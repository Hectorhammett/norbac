@extends('layout')

@section('title','Otras Actividades')

@section('mainContent')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="main-header">Otras Actividades</h1>
            <ul class="main-text">
                <li>Restauración de zona antigüa en fase de cese de operaciones</li>
                <li>Contribución a la quema de gases de efecto invernadero</li>
            </ul>
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