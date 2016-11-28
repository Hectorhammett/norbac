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

Route::get('/quienes-somos',function(){
    return view("quienes");
});

Route::get('/vision',function(){
    return view("vision");
});

Route::get('/mision',function(){
    return view("mision");
});

Route::get('/valores',function(){
    return view('valores');
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

Route::get("/paginas-de-interes",function(){
    return view("interes");
});

Route::get("/estadisticas",function(){
    return view("estadisticas");
});

Route::get("/galeria",function(){
    return view("galeria");
});