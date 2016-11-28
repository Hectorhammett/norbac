@extends('layout')

@section('title','Contacto')

@section('css')
    <style>
        #map{
            height:350px;
        }
    </style>
@end

@section('mainContent')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="main-header">Contacto</h1>
            <h3 class="main-header">Solicitud de servicio y cotizaciones</h3>
            <p class="main-text">
                juvenal.calderon@norbac.com.mx
            </p>
        </div>
        <div class="col-sm-12">
            <h3 class="main-header">Contacto general</h3>
            <p class="main-text">
                rufino.radilla@norbac.com.mx<br/>
                rodolfo.rodriguez@norbac.com.mx
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h1 class="main-header">Ubicación</h1>
        </div>
        <div class="col-sm-12" id="map">
            
        </div>
    </div>
@stop

@section('scripts')32.481992, -117.052854
    <script>
      function initMap() {
        var uluru = {lat: 32.4819, lng: -117.0528};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsjSmIXj76SFYjb0HZ_OO9bxtKKj6nH94&callback=initMap">
    </script>
@stop