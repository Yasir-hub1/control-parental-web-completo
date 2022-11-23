@extends('app')

@section('content')

    <div class="card" style="margin: 2%">
        <div class="card-header" style="background-color: rgb(0, 0, 20); color: white;">
            <label for="">Notificaciones sin leer</label>
        </div>
        <div class="card-body">
            @if (auth()->user())
                @forelse ($postNotifications as $notification)
                    <div class="alert alert-warning">
                        Descripción: {{ $notification->data['nombre'] }}
                        <p>{{ $notification->created_at->diffForHumans() }}</p>
                        <button class="mark-as-read btn btn-sm btn-dark"
                            data-id="{{ $notification->id }}">Marcar como
                            leído</button>
                    </div>
                    @if ($loop->last)
                        <a href="#" id="mark-all">Marcar todo como leído</a>
                    @endif

                @empty
                    No hay notificaciones
                @endforelse
            @endif
        </div>
    </div>

@endsection

@section('js')
    <script>
        function sendMarkRequest(id = null) {
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
    </script>
@endsection
