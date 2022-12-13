@extends('app')

@section('title')
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid">
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('perfil')}}">Contactos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('tokens')}}">Llamada</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('dispositivos')}}">Galería</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('plan')}}">Plan</a>
          </li>
      </ul>
    </div>
  </nav>
@endsection

@section('content')

<br>
<div class="container-fluid d-flex justify-content-center aling-items-center">
    <div class="card" style="width: 40%;">
        <div class="card-header">
          <h4 class="d-flex justify-content-center text-uppercase"><u><strong>Contactos de {{$info->name}} </strong></u></h4>
            
        </div>
        <div class="card-body">
              <table class="table table-striped table-dark table-hover">
                <thead class="thead-dark">
                  <tr >
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Numero</th>
                    
                  </tr>
                </thead>
                <tbody>
                      @php
                          $a=0;
                      @endphp
                      @foreach ($contactos as $contacto)
                      @php
                          $a=$a+1;
                      @endphp
                          <tr>
                            <th scope="row">{{$a}}</th>
                            <td>{{$contacto->nombre}}</td>
                            <td>{{$contacto->numero}}</td>
                            
                          </tr>
                          
                      
                      
                      @endforeach

                  
                </tbody>
                    
              </table>  

                
                
              
        </div>
    </div>

</div>



  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar un nuevo dispositivo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('crear_hijo')}}" method="POST" >
                @csrf
                <div class="mb-3">
                  <label for="nombre" class="form-label">Nombre</label>
                  <input type="text" name="nombre" class="form-control" id="nombre" >
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" name="apellido" class="form-control" id="apellido" >
                </div>
                <div class="mb-3">
                    <label for="alias" class="form-label">Alias</label>
                    <input type="text" name="alias" class="form-control" id="alias" >
                  </div>
                <div class="mb-3">
                <div class="mb-3">
                  <label for="celular" class="form-label">Celular</label>
                  <input type="text" name="celular" class="form-control" id="celular">
                </div>
                <div class="mb-3">
                    <label for="sexo" class="form-label">sexo</label>
                    <input type="text" name="sexo" class="form-control" id="sexo">
                </div>

                <div class="mb-3">
                    <label for="edad" class="form-label">Edad</label>
                    <input type="text" name="edad" class="form-control" id="edad">
                </div>
                
                <button type="submit" class="btn btn-dark">Guardar dispositivo</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

@stop

@section('css')
   



@stop

@section('js')
<script src=""></script>

@stop