@extends('app')


@section('content')
<br>
<div class="container-fluid d-flex justify-content-center aling-items-center" style="height: 750px;">
    <div class="card w-100">
        <div class="card-header">
          <h4 class="d-flex justify-content-center text-uppercase"><u><strong>Ubicacion de {{$info->name}} </strong></u></h4>
            
        </div>
        <div class="card-body">
            <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9035.758464450946!2d-63.16046720096668!3d-17.78847979944152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3998764f83dfd833!2sCENTRO%20COMERCIAL%20BARRIO%20LINDO!5e0!3m2!1ses!2sbo!4v1667176072596!5m2!1ses!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    
        </div>
    </div>

</div>



  
@stop

@section('css')
   



@stop

@section('js')
<script src=""></script>

@stop