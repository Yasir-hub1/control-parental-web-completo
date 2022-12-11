<!DOCTYPE html>
<html lang="en">

<head>
    <title>Protecting you</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <!--ESTILOS DROPDOWN NOTIFICATION-->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
    {{-- <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    
    <link rel="stylesheet" href="admilte/css/iconics.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css"
        integrity="sha512-DIW4FkYTOxjCqRt7oS9BFO+nVOwDL4bzukDyDtMO7crjUZhwpyrWBFroq+IqRe6VnJkTpRAS6nhDvf0w+wHmxg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('css')

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    {{-- <script src="{{ asset('js/jquery.min.js') }}" charset="utf-8"></script> --}}


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
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('plan') }}">Plan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('notification.index') }}">Notificaciones</a>
                    </li>

                </ul>
            </div>
            <ul class="navbar-nav float-end">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <!--  <div class="dropdown ml-auto">-->
                    <a class="me-3 mr-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                        role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <i class="far fa-bell"></i>
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
            <a class="btn btn-danger navbar-btn" href="#"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-fw fa-power-off text-red"></i>

            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">Log Out</a>
            </form>
        </div>

    </nav>

    @yield('content')

    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    @yield('js')
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    <!--SCRIPT NOTIFICATION-->
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

</html>
