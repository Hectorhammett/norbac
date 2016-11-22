@extends('layout')

@section('title','Legislación')

@section('mainContent')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="main-header">Legislación</h1>
            <p class="main-text">
                Normas y leyes mediante cuales nos encontramos operando.
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