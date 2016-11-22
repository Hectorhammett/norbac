<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get("/manejo-integral",function(){
    return view("manejoIntegral");
});

Route::get("/otras-actividades",function(){
    return view("otrasActividades");
});

Route::get("/contacto",function(){
    return view("contacto");
});

Route::get("/legislacion",function(){
    return view("legislacion");
});

Route::get("/estadisticas",function(){
    return view("estadisticas");
});

Route::get("/galeria",function(){
    return view("galeria");
});