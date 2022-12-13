@extends('app')


@section('content')


<section class="section bg-light">
    <div class="container"><h4 class="bold text-center mb-5 text-secondary">
       Mi Familia</h4>
        <div class="row gap-y">
         
            @foreach ($hijos as $hijo)
           
               <div class="col-md-4 col-xs-4 col-6 px-md-5">
                <td>
                    <a href="{{route('dispositivos')}}"  >
                        @if ($hijo->sexo == 'F')
                        <img src="{{ asset('img/niña.jpg')}}"class="img-responsive mx-auto op-7"
                        style="max-height: 150px;">
                        @endif
                        @if ($hijo->sexo == 'M')
                        <img src="{{ asset('img/niño.jpg')}}"class="img-responsive mx-auto op-7"
                        style="max-height: 150px;">
                        @endif
                        <br>
                        <H5>{{$hijo->alias}} </H5>
                    </a>
                   
                </td>
               
            </div>
            @endforeach
            <div class="col-md-4 col-xs-4 col-6 px-md-5">
             <td>
               
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                    <img src="{{ asset('img/plusorange.png')}}"class="img-responsive mx-auto op-7"
                style="max-height: 150px;">
                 </button>
                <h5>Añadir hijo</h5>
             </td>
            </div>
        </div>
        <br>
        <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header" id="kt_modal_add_user_header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bolder">Añadir Hijo</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                        <!--begin::Form-->
                        <form id="kt_modal_add_user_form" class="form" method="POST"  action="{{ route('crear_hijo') }}"
                        enctype="multipart/form-data">
                        @csrf
                            <!--begin::Scroll-->
                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                          
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fw-bold fs-6 mb-2">Nombre</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="nombre" id="nombre" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Nombre" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fw-bold fs-6 mb-2">Apellido</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="apellido" id="apellido" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Apellido" value="" />
                                    <!--end::Input-->
                                </div>
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fw-bold fs-6 mb-2">Alias</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="alias" id="alias" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Alias" value="" />
                                    <!--end::Input-->
                                </div>
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fw-bold fs-6 mb-2">Sexo</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="sexo" id="sexo" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Sexo" value="" />
                                    <!--end::Input-->
                                </div>
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fw-bold fs-6 mb-2">Edad</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="edad" id="edad" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Edad" value="" />
                                    <!--end::Input-->
                                </div>
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fw-bold fs-6 mb-2">Numero de Celular</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="celular" id="celular" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Numero de Celular" value="" />
                                    <!--end::Input-->
                                </div>
                               
    
                   
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                
                                <!--end::Input group-->
                            </div>
                            <!--end::Scroll-->
                            <!--begin::Actions-->
                            <div class="text-center pt-15">
                                <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
                                <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
    </div>
</section>
    {{--<div class="navbar1">

        <ul>

            <li>
                <a href="#home" class="dot active" data-scroll="home">
                    <span>Inicio</span>
                </a>
            </li>

            <li>
                <a href="#about" class="dot" data-scroll="about">
                    <span>Dispositivos</span>
                </a>
            </li>

        </ul>

    </div>



    <section class="sec section-info gray-bg" id="home">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-8">
                    <div class="about-text go-to">
                        <h3 class="dark-color">Información Personal</h3>
                        <h6 class="theme-color lead">Cuenta {{$usuario->Plan}}</h6>
                        <div class="row about-list">
                            <div class="col-md-6">
                                <div class="media">
                                    <label style="font-size:15px">Nombre&nbsp;/</label>
                                    <p>{{$usuario->name}}</p>
                                </div>
                                <div class="media">
                                    <label style="font-size:15px">Plan&nbsp;/</label>
                                    <p>{{$plan->name}}</p>
                                </div>
                                <div class="media">
                                    <label style="font-size:15px">Limite&nbsp;/</label>
                                    <p>Fecha fin</p>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <label style="font-size:15px">Correo&nbsp;/</label>
                                    <p>{{$usuario->email}}</p>
                                </div>
                                <div class="media">
                                    <label style="font-size:14px">Telefono&nbsp;/</label>
                                    <p>&nbsp;{{$usuario->telefono}}</p>
                                </div>
                                <div class="media">
                                    <label style="font-size:15px;width: 20%;">Dispositivos&nbsp;/</label>
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-avatar">
                        <img class="avatar" src="{{ asset('image/avatar7.png') }}" title="" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="sec" id="about" style="background-color:#fff;">
        {{-- <span style="text-align:center;align-items:center;height:60px;width:60px;">Dispositivos</span> }}
        @if ($plan->name=="free" && $numDispositivos<2)
            <a href="" class="btn btn-dark" style="height: 3%; margin: 5px;" data-bs-toggle="modal" data-bs-target="#exampleModal">Añadir dispositivo.</a>
        @endif
        @if ($plan->name=="standard" && $numDispositivos<3)
            <a href="" class="btn btn-dark" style="height: 3%; margin: 5px;" data-bs-toggle="modal" data-bs-target="#exampleModal">Añadir dispositivo.</a>
        @endif
        @if ($plan->name=="Premiun" && $numDispositivos<5)
            <a href="" class="btn btn-dark" style="height: 3%; margin: 5px;" data-bs-toggle="modal" data-bs-target="#exampleModal">Añadir dispositivo.</a>
        @endif
        
        
        <section class="slider" style="padding-top:150px;">
            

            <ul id="autoWidth" class="cs-hidden">
                @php
                        $a=0;
                @endphp
                @foreach ($dispositivos as $dispositivo)
                    @php
                        $a=$a+1;
                    @endphp    
                    <!-- slider 1 -->
                <li class="item-a">
                    <!-- box slider -->
                    <div class="box">
                        <!-- slider image -->
                        <div class="slider-img">
                            <img src="{{ asset('image/android.webp') }}" alt="" />
                            <!-- overlayer -->
                            <div class="overlay">
                                <!-- buy boton -->
                                <form action="{{ route('usuario.test', ['id'=>$dispositivo->id]) }}" method="get" >
                                    <button class="btn-btn" type="submit">Ver</button>
                                    
                                </form>
                                
                            </div>
                        </div>

                        <div class="detalle-box">
                            <!-- tipoo -->
                            <div class="type">
                                <a href="#">{{$dispositivo->nombre}}</a>
                                <span>{{$dispositivo->celular}}</span>
                            </div>
                            <!-- price -->
                            {{-- <a href="" class="price">$500</a> }}
                        </div>
                    </div>
                </li>

                @endforeach

            </ul>
        </section>
    </section>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar un nuevo dispositivo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('usuario.addDisp')}}" method="POST" >
                @csrf
                <div class="mb-3">
                  <label for="nombre" class="form-label">Nombre</label>
                  <input type="text" name="nombre" class="form-control" id="nombre" >
                 
                </div>
                <div class="mb-3">
                  <label for="celular" class="form-label">Celular</label>
                  <input type="text" name="celular" class="form-control" id="celular">
                </div>

                <div class="mb-3">
                    <label for="codigo" class="form-label">Codigo</label>
                    <input type="text" name="codigo" class="form-control" id="codigo">
                  </div>
                
                <button type="submit" class="btn btn-dark">Guardar dispositivo</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>--}}
@stop

@section('css')

    {{--<link rel="stylesheet" href="{{ asset('css/tutor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/SecInfo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightslider.css') }}">--}}

@stop

@section('js')
    {{--<script src="{{ asset('js/jquery.min.js') }}" charset="utf-8"></script>
    {{-- <script src="{{ asset('js/jquery-3.6.0.js') }}"></script> }}
    <script src="{{ asset('js/script.js') }}"></script>

    <script src="{{ asset('js/lightslider.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $(window).on('scroll', function() {

                var link = $('.navbar1 a.dot');
                var top = $(window).scrollTop();

                $('.sec').each(function() {
                    var id = $(this).attr('id');
                    var height = $(this).height();
                    var offset = $(this).offset().top - 150;
                    if (top >= offset && top < offset + height) {
                        link.removeClass('active');
                        $('.navbar1').find('[data-scroll="' + id + '"]').addClass('active');
                    }
                });

            });

        });
    </script>--}}


@stop
  