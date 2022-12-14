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
         
      </ul>
    </div>
  </nav>
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card mb-10 mb-xl-10">
                <div class="containertable">
                    <br>
                    <div class="text-center mb-10">
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3">Lista de Diagramas</h1>
                        <!--end::Title-->
                       
                    </div>
               
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Diagram" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                           
                                <!--begin::Add user-->
                                <button type="button" class="btn btn-warning"  style="background-color: #5564DD" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->Añadir Diagrama</button>
                                <!--end::Add user-->
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::Group actions-->
                            <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                                <div class="fw-bolder me-5">
                                <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
                                <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
                            </div>
                            <!--end::Group actions-->
                            <!--begin::Modal - Adjust Balance-->
                            <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                               
                                <!--end::Modal dialog-->
                            </div>
                            <!--end::Modal - New Card-->
                            <!--begin::Modal - Add task-->
                            <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Modal header-->
                                        <div class="modal-header" id="kt_modal_add_user_header">
                                            <!--begin::Modal title-->
                                            <h2 class="fw-bolder">Añadir nuevo Diagrama</h2>
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
                                            <form id="kt_modal_add_user_form" class="form" method="POST"  action="#"
                                            enctype="multipart/form-data">
                                            @csrf
                                                <!--begin::Scroll-->
                                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                       
                                                        <!--end::Image input-->
                                                        <!--begin::Hint-->
                                                     
                                                        <!--end::Hint-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fw-bold fs-6 mb-2">Nombre</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" name="nombre" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Nombre " value="" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fw-bold fs-6 mb-2">Descripcion</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" name="descripcion" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="descripción" value="" />
                                                        <!--end::Input-->
                                                    </div>
                                                  
                                                    
                        
                                                    
                                                
                                                    <!--begin::Input group-->
                                                    
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Scroll-->
                                                <!--begin::Actions-->
                                                <div class="text-center pt-15">
                                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
                                                    <button type="submit" class="btn btn-warning" data-kt-users-modal-action="submit">
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
                            <!--end::Modal - Add task-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <table class="newtable">
                                <thead>
                                    <tr class="fw-bolder text-muted bg-light">
                                       
                                        <th class="ps-4 min-w-225px rounded-start">#</th>
                                        <th class="min-w-125px">Nombre</th>
                                        <th class="min-w-125px">Numero</th>
                                      
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
                                                    
                                                    <td>

                                                  <div class="d-flex flex-column">
                                                    {{$a}}
                                                        </div>
                                                    </td> 
                                                    <td>  <span>{{($contacto->nombre)? "--": $contacto->nombre}}</span>
                                                    </td>
                                            
                                                  
                                                    <td>  <span>{{($contacto->numero == null)? "--": $contacto->numero}}</span>
                                                   </td>
                                              
                                                
                                            
                
                                                  
                                               </tr>
                                    
                                             
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            
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