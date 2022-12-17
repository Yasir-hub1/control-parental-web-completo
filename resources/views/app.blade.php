<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>PROTECTING YOU</title>

   
    <link rel="shortcut icon" href="../../img/logowhite.png" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="../../../demo1/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="../../../demo1/dist/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="../../../demo1/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../../demo1/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style=""> <img src="img/controlparental2.png" width="150">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('perfil') }}">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('tokens') }}">Tokens de
                            Usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('dispositivos') }}">Dispositivos</a>
                    </li>
                    {{--<li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('plan') }}">Plan</a>
                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('notification.index') }}">Notificaciones</a>
                    </li>

                </ul>
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" style="" class="header align-items-stretch">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-center justify-content-between">
                        <!--begin::Aside mobile toggle-->
                        <h1 class="d-flex align-items-center text-dark fw-bolder fs-5 my-1"> <b>
                           
                               
                           </b>
                            <!--begin::Separator-->
                            <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                            <!--end::Separator-->
                            <!--begin::Description-->
                            <div class="cursor-pointer symbol symbol-3px symbol-md-4px dropdown float-left" style="margin-right: 10px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                  
                                <img src="{{ asset('img/pagre.jpg')}}" alt="user" />
                                <a href="{{route('perfil')}}"> 
                                    <small class="text-muted fs-7 fw-bold my-1 ms-1">{{auth()->user()->name}} {{auth()->user()->apellido}}</small>
                                </a>
                               

                        </div>
                            <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
                                <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                                    id="kt_aside_mobile_toggle">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                fill="black" />
                                        </svg>
                                       
                                    </span>
                                    <!--end::Svg Icon-->

                                </div>
                            </div>
                        </div>
                            <div class="container-fluid d-flex align-items-center dropdown justify-content-between" >
                                <div class="cursor-pointer symbol symbol-3px symbol-md-4px dropdown float-left" style="margin-right: 10px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                  
                                        <small class="text-muted fs-7 fw-bold my-1 ms-1"> </small>
                                   
                                   
    
                            </div> 
                        
                            <ul class="navbar-nav float-left">
                                <!-- Notifications Dropdown Menu -->
                                <li class="nav-item dropdown float-left">
                                   
                                    <!--  <div class="dropdown ml-auto">-->
                                    <a class="me-3 mr-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                                        <span class="menu-bullet">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                                              </svg>
                                        </span>
                                       
                                        @if (count(auth()->user()->unreadNotifications) > 0)
                                            <span
                                                class="badge rounded-pill badge-notification bg-danger count-notification">{{ count(auth()->user()->unreadNotifications) }}</span>
                                        @else
                                            <span class="badge rounded-pill badge-notification bg-danger count-notification"></span>
                                        @endif
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right scrollspy-example"
                                        aria-labelledby="navbarDropdownMenuLink">
                                        <span class="dropdown-header border-bottom"
                                            style="background: rgb(226, 223, 223)">NOTIFICACIONES SIN LEER</span>
                                        <div class="unread-notification">
                                            @php
                                                $i = 1;
                                            @endphp
                                            @forelse (auth()->user()->unreadNotifications->take(3) as $notification)
                                                <a href="#" class="dropdown-item border-bottom me-1" id={{ $i }}>
                                                    <div class="row">
                                                        <div class="col-12"><i class="fas fa-envelope mr-2"></i>
                                                            {{ $notification->data['nombre'] }}</div>
                                                        <div class="col-12"><small class="ml-2 float-end text-muted text-sm"
                                                                style="font-size: 0.6rem">{{ $notification->created_at->diffForHumans() }}</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                @php
                                                    $i = $i + 1;
                                                @endphp
                                            @empty
                                                <div class="row" id="remove-unread">
                                                    <div class="col-12">
                                                        <span class="float-end text-muted text-sm">Sin notificaciones por leer </span>
                                                    </div>
                                                </div>
                                            @endforelse
                
                                            @if (count(auth()->user()->unreadNotifications) > 2)
                                                <a href="{{ route('notification.index') }}" class="dropdown-item border-bottom me-1"
                                                    id="ver-mas">
                                                    <div class="row">
                                                        <div class="col-12 bg-gray">
                                                            Ver más Notificaciones...</div>
                                                    </div>
                                                </a>
                                            @endif
                                        </div>
                                        <span class="dropdown-header border-bottom"
                                            style="background: rgb(226, 223, 223)">NOTIFICACIONES LEÍDAS</span>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @forelse (auth()->user()->readNotifications->take(3) as $notification)
                                            @if ($i < 4)
                                                <a href="#" class="dropdown-item mb-0">
                                                    <div class="row">
                                                        <div class="col-12"><i class="fas fa-users mr-2"></i>
                                                            {{ $notification->data['nombre'] }}</div>
                                                        <div class="col-12"><small class="ml-3 float-end text-muted text-sm"
                                                                style="font-size: 0.6rem">{{ $notification->created_at->diffForHumans() }}</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                @php
                                                    $i++;
                                                @endphp
                                            @endif
                                        @empty
                                            <div class="row">
                                                <div class="col-12">
                                                    <span class=" float-end text-muted text-sm">Sin notificaciones leidas </span>
                                                </div>
                                            </div>
                                        @endforelse
                                        <a href="{{ route('markAsRead') }}" class="dropdown-item dropdown-footer border-top">Marcar
                                            todas como leídas</a>
                                    </div>
                                </li>
                            </ul>
                            <!--end::Aside mobile toggle-->
                            <!--begin::Mobile logo-->

                            <!--end::Mobile logo-->
                            <!--end::Wrapper-->
                            
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
         
                    <!--begin::Toolbar-->
                    <div class="toolbar" id="kt_toolbar">
                        <!--begin::Container-->
                        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                           
                            <!--begin::Page title-->
                            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                                <!--begin::Title-->
                                <div id="app">
                                    <main class="py-4">
                                        @yield('title')
                                    </main>
                                </div>
                                <!--end::Description-->
                                </h1>
                                <!--end::Title-->
                            </div>
                            <!--end::Page title-->
                            <!--begin::Actions-->
                            <!--end::Actions-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Toolbar-->
					<div id="app">
						<main class="section-1">
							@yield('content')
						</main>
					</div>
                </div>
				
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div
                        class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-bold me-1">2022©</span>
                            <a href="https://keenthemes.com" target="_blank"
                                class="text-gray-800 text-hover-primary">Protecting you</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                            <li class="menu-item">
                                <a href="#" target="_blank" class="menu-link px-2">About</a>
                            </li>
                            
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->


    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                    fill="black" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    @yield('css')
    <!--begin::Javascript-->
    <script>
        var hostUrl = "../../../demo1/dist/assets/";
    </script>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="../../../demo1/dist/assets/plugins/global/plugins.bundle.js"></script>
    <script src="../../../demo1/dist/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="../../../demo1/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="../../../demo1/dist/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="../../../demo1/dist/assets/js/widgets.bundle.js"></script>
    <script src="../../../demo1/dist/assets/js/custom/widgets.js"></script>
    <script src="../../../demo1/dist/assets/js/custom/apps/chat/chat.js"></script>
    <script src="../../../demo1/dist/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="../../../demo1/dist/assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="../../../demo1/dist/assets/js/custom/utilities/modals/users-search.js"></script>
    <script src="../../../demo1/dist/assets/js/custom/apps/user-management/users/list/table.js"></script>

    {{--  <script src="../../../demo1/dist/assets/js/custom/apps/user-management/users/list/export-users.js"></script>  --}}
		 
		<script src="../../../demo1/dist/assets/js/widgets.bundle.js"></script>
		<script src="../../../demo1/dist/assets/js/custom/widgets.js"></script>
		<script src="../../../demo1/dist/assets/js/custom/apps/chat/chat.js"></script>
		<script src="../../../demo1/dist/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="../../../demo1/dist/assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="../../../demo1/dist/assets/js/custom/utilities/modals/users-search.js"></script>
  {{--        <script src="../../../demo1/dist/assets/js/custom/apps/calendar/calendar.js"></script>  --}}

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
      integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        // Enable pusher logging - don't include this in production
        //  Pusher.logToConsole = true;

        var pusher = new Pusher('37043fdf6f86d96c9095', {
            cluster: 'us2'
        });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
        console.log('entra');
        console.log(data);

            //cambiando html con notificación nueva
            //cambiando html con unread notification sin la notification nueva
            if (data['unread'].length == 2) {
                $('.unread-notification').find('#1').html('<div class="row">' +
                    '<div class="col-12"><i class="fas fa-envelope mr-2"></i>' + data[
                        'contenido']['nombre'] + '</div>' +
                    '<div class="col-12"><small class="ml-2 float-end text-muted text-sm"' +
                    ' style="font-size: 0.6rem">' + data['time'] + '</small>' +
                    '</div>' + '</div>');

            for (let index = 0; index < 2; index++) {
                console.log('notificacion sin leer: ' + data['unread'][index]['nombre']);
                $('.unread-notification').find('#' + (index + 2)).css('display', 'block').html(
                    '<div class="row">' +
                    '<div class="col-12"><i class="fas fa-envelope mr-2"></i>' + data['unread'][index][
                        'nombre'
                    ] + '</div>' +
                    '<div class="col-12"><small class="ml-2 float-end text-muted text-sm"' +
                    ' style="font-size: 0.6rem">' + data['timesur'][index] + '</small>' +
                    '</div>' + '</div>');

            }
        } else if (data['unread'].length == 1) {
            console.log('entra uno sin leer')
            $('.unread-notification').find('#1').html('<div class="row">' +
                '<div class="col-12"><i class="fas fa-envelope mr-2"></i>' + data[
                    'contenido']['nombre'] + '</div>' +
                '<div class="col-12"><small class="ml-2 float-end text-muted text-sm"' +
                ' style="font-size: 0.6rem">' + data['time'] + '</small>' +
                '</div>' + '</div>');
            $('.unread-notification').append(
                '<a href="#" class="dropdown-item border-bottom me-1" id="2"><div class="row">' +
                '<div class="col-12"><i class="fas fa-envelope mr-2"></i>' + data['unread'][0]['nombre'] +
                '</div>' +
                '<div class="col-12"><small class="ml-2 float-end text-muted text-sm"' +
                ' style="font-size: 0.6rem">' + data['timesur'][0] + '</small>' +
                '</div>' + '</div></a>');
            $('.unread-notification').append(
                '<a href="#" class="dropdown-item border-bottom me-1" id="3" style="display:none"><div class="row">' +
                '<div class="col-12"><i class="fas fa-envelope mr-2"></i>' +
                'nombre' + '</div>' +
                '<div class="col-12"><small class="ml-2 float-end text-muted text-sm "' +
                ' style="font-size: 0.6rem">' + '</small>' +
                '</div>' + '</div></a>');
        } else if (data['unread'].length == 0) {
            $('.unread-notification').find('#remove-unread').remove();
            $('.unread-notification').prepend(
                '<a href="#" class="dropdown-item border-bottom me-1" id="1"><div class="row">' +
                '<div class="col-12"><i class="fas fa-envelope mr-2"></i>' + data['contenido']['nombre'] +
                '</div>' +
                '<div class="col-12"><small class="ml-2 float-end text-muted text-sm"' +
                ' style="font-size: 0.6rem">' + data['time'] + '</small>' +
                '</div>' + '</div></a>');
        }

        //modificando el contador encima del icono de notificación
        if (data['contenido'] != null) {
            //Cuando entra una notificación
            d = $('.count-notification').text();
            if (d != '') {
                c = parseInt(d);
                c = c + 1;
                if (c > 2) {
                    //   console.log($('.unread-notification').find('#ver-mas').length);
                    if ($('.unread-notification').find('#ver-mas').length == 0) {
                        $('.unread-notification').append(
                            '<a href="{{ route('notification.index') }}" class="dropdown-item border-bottom me-1" id="ver-mas">' +
                            '<div class = "row">' +
                            '<div class = "col-12 bg-gray">' + 'Ver más Notificaciones... </div>' +
                            ' </div > ' + '</a>'
                        );
                    }
                }

            } else {
                c = 1;
            }

            $('.count-notification').text(c);

                iziToast.show({
                    title: '¡Nueva Notificación!',
                    message: data['contenido']['nombre'],
                    backgroundColor: 'red',
                    theme: 'dark', // dark
                    color: 'red', // blue, red, green, yellow
                    timeout: 10000,
                    overlayClose: false,
                });
            }
        });
    </script>

    </head>




</body>
<!--end::Body-->

</html>
