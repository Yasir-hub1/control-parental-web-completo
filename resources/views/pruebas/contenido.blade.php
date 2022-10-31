@extends('app')


@section('content')
<br>
<div class="container-fluid d-flex justify-content-center aling-items-center">
    <div class="card">
        <div class="card-header">
          <h4 class="d-flex justify-content-center text-uppercase"><u><strong>contenidos de {{$info->name}} </strong></u></h4>
            
        </div>
        <div class="card- h-auto">
              <table class="table table-striped table-dark table-hover">
                <thead class="thead-dark">
                  <tr >
                    <th scope="col">#</th>
                    <th class="text-center" scope="col">Fecha</th>
                    <th class="text-center" scope="col">Nombre</th>
                    <th class="text-center" scope="col">Path</th>
                    <th class="text-center" scope="col">URL</th>
                    <th class="text-center" scope="col">Categoria</th>
                    <th class="text-center" scope="col">Imagen</th>
                    
                  </tr>
                </thead>
                <tbody>
                      @php
                          $a=0;
                      @endphp
                      @foreach ($contenidos as $contenido)
                      @php
                          $a=$a+1;
                      @endphp
                          <tr>
                            <th scope="row">{{$a}}</th>
                            <td>{{$contenido->fecha}}</td>
                            <td>{{$contenido->nombre}}</td>
                            <td>{{$contenido->path}}</td>
                            <td>{{$contenido->url}}</td>
                            @php
                                $var= App\Models\Categoria\Categoria::where('id',$contenido->categoria_id)->first();
                            @endphp
                            <td uppercase >{{$var->nombre}}</td>
                            <td class="d-flex justify-content-center"><img id="myImg{{$contenido->id}}" class="myImg" src="{{$contenido->url}}" alt="{{$contenido->nombre}}" style="width:50%;max-width:300px" onclick="getImage({{$contenido->id}})"></td>
                            
                            
                          </tr>
                          
                      
                      
                      @endforeach

                  
                </tbody>
                    
              </table>  

                
                
              
        </div>
    </div>

</div>

<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>


  

@stop

@section('css')
   
<link rel="stylesheet" href="{{ asset('css/popup.css') }}">


@stop

@section('js')
<script src="{{ asset('js/popup.js') }}" charset="utf-8"></script>
<script src=""></script>

@stop