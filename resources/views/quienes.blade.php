@extends('layout')

@section('title','¿Quiénes Somos?')

@section('mainContent')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="main-header">¿Quiénes Somos?</h1>
            <p class="main-text">
                El antiguo relleno sanitario de Tijuana ha almacenado más de doce millones de

                metros cúbicos de residuos en el sitio durante un lapso mayor a cuarenta años.

                Norbac, la nueva administración, ha tomado el gran reto de controlar los

                impactos ambientales asociados al cese de operaciones en las áreas donde se

                ha llegado a su fase de clausura, y proponiendo dentro de un nuevo proyecto

                el manejo integral de residuos mediante procesos avanzados de segregación

                favoreciendo a las actividades de reuso, reutilización y reciclamiento; el

                proceso que minimiza el volumen de residuos recibidos le precede una fase de

                confinamiento y generación de energía eléctrica a partir del uso del biogás,

                resultado de la metanogénesis de los residuos orgánicos presentes en los

                residuos de manejo especial, representando el proyecto de manejo integral de

                residuos más ambicioso del noroeste de México.
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