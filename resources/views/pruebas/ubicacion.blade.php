@extends('app')


@section('content')
<div class="card">
  <div class="card-header">
    <h3>Ubicacion de {{$info->name}}</h3>
  </div>
  <div class="card-body">
    <div id="map" style="height: 800px; "> </div> 
  </div>
</div>
  
@stop

@section('css')
   



@stop

@section('js')


<script>
    
  	 function initMap() {
      const  map = new google.maps.Map(document.getElementById('map'), {
		  center: {lat: {!! $localizacion->latitud !!}, lng: {!! $localizacion->longitud !!}},
          zoom: 13,
        });
      new google.maps.Marker({
          position: {lat: {!! $localizacion->latitud !!}, lng: {!! $localizacion->longitud !!}},
          map: map,
	  title: 'Ubicacion de Mercado el Quior'
        });
      }
      window.initMap=initMap;
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl8DaopxOLYwyY0gJV2fUky4_X99ZFwJY&callback=initMap" async defer></script>

@stop