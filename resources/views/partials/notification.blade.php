<div id="notifications-container">
    @if(isset($notifications))
    @foreach($notifications as $notification)
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast{{ $notification->id }}" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="{{ asset('images/logo.PNG') }}" width="20" class="rounded me-2" alt="prolinko">
                <strong class="me-auto">Notificación</strong>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Hola! {{ $notification->nombre }} quiere contactarte, su email es: {{ $notification->email }}
                <div class="row">
                    <div class="col-12 d-flex my-1">
                        <form action="" method="post">
                            @csrf @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-x-circle"></i> Denegar</button>
                        </form>
                        <form action="{{ route('notification.accept') }}" class="notification-accept-form" method="post">
                            @csrf
                            <input type="text" name="id_contador" value="{{ $notification->id }}" class="visually-hidden">
                            <button type="submit" class="btn btn-success btn-sm mx-1"><i class="bi bi-check-circle"></i> Permitir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif
</div>
