@extends('app')


@section('content')
<br>
<div class="container-fluid d-flex justify-content-center aling-items-center">
    <div class="card" style="width: 40%;">
        <div class="card-header">
          <h4 class="d-flex justify-content-center text-uppercase"><u><strong>archivos de {{$info->name}} </strong></u></h4>
        </div>
        <div class="card-body">
              <table class="table table-striped table-dark table-hover">
                <thead class="thead-dark">
                  <tr >
                    <th scope="col">#</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Path</th>
                  </tr>
                </thead>
                <tbody>
                      @php
                          $a=0;
                      @endphp
                      @foreach ($archivos as $archivo)
                      @php
                          $a=$a+1;
                      @endphp
                          <tr>
                            <th scope="row">{{$a}}</th>
                            <td>{{$archivo->fecha}}</td>
                            <td>{{$archivo->path}}</td>    
                          </tr>
                      @endforeach
                </tbody>
              </table>             
        </div>
    </div>
</div>
@stop

@section('css')
   



@stop

@section('js')
<script src=""></script>

@stop