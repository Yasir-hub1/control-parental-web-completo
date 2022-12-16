@extends('app')

@section('title')
<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
  <div class="menu-item">
        <a class="menu-link active py-3" href="{{route('hijoContactos', $info->id )}}">                                    
            <span class="text-muted">Contacto</span>
        </a>                                        
  </div>
  <span class="menu-arrow d-lg-none"></span>
   <div class="menu-item">
        <a class="menu-link active py-3" href="{{route('hijoLlamadas', $info->id )}}">                                   
            <span class="text-muted">Llamada</span>
        </a>
    </div>									
</div>
@endsection
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
      console.log('hola mundo');
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