@extends('app')

@section('content')

    <div class="card" style="margin: 2%">
        <div class="card-header" style="background-color: rgb(0, 0, 20); color: white;">
            <label for="">Notificaciones sin leer</label>
        </div>
        <div class="card-body" id="notificaciones-view">
            @if (auth()->user())
                @forelse ($postNotifications as $notification)
                    <div class="alert alert-warning" id="{{ $notification->data['contenido'] }}">
                        Descripción: {{ $notification->data['nombre'] }}
                        <p>{{ $notification->created_at->diffForHumans() }}</p>
                        {{-- <button class="mark-as-read btn btn-sm btn-dark" data-id="{{ $notification->data['contenido'] }}">Marcar como
                            leído</button> --}}
                    </div>
                    @if ($loop->last)
                        <a href="{{ route('markAsRead') }}" id="mark-all">Marcar todo como leído</a>
                    @endif

                @empty
                    <p id="notification-empty"> No hay notificaciones</p>
                @endforelse
            @endif
        </div>
    </div>

@endsection

@section('js')
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        //  Pusher.logToConsole = true;
        var pusher = new Pusher('109c670c473fed2434ca', {
            cluster: 'us2'
        });


        var channel = pusher.subscribe('canal-vista-notification');
        channel.bind('evento-vista-notification', function(data) {
            console.log('en vista de ver notificaciones');
            console.log(data);
            $('#notificaciones-view').prepend('<div class="alert alert-warning" id=' + data['newnotification'][
                'id'] +
                '>Descripción: ' +
                data['newnotification']['nombre'] + '<p>' +
                data['time'] + '</p>');

            if ($('#notification-empty').length == 1) {
                $('#notification-empty').remove();
                $('#notificaciones').append(
                    ' <a href="{{ route('markAsRead') }}" id="mark-all">Marcar todo como leído</a>');
            }
        });
    </script>

    <script>
        /*    function sendMarkRequest(id = null) {
                        if (id == null) {
                            console.log('click sin id');
                        } else {
                            console.log('click con id');
                        }
                        return $.ajax("{{ route('markNotification') }}", {
                            method: 'POST',
                            data: {
                                _token: "{{ csrf_token() }}",
                                id
                            }
                        });
                    }

                    $(document).ready(function() {
                        $('.mark-as-read').on('click', function() {
                            console.log('click');
                            let request = sendMarkRequest($(this).data('id'));

                            request.done(() => {
                                $(this).parents('div.alert').remove();
                            });
                        });

                        $('#mark-all').on('click', function() {
                            let request = sendMarkRequest();

                            request.done(() => {
                                $('div.alert').remove();
                            })
                        });
                    });
               */
    </script>
@endsection
