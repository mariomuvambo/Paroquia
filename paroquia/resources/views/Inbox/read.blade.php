<x-app-layout>
    <x-slot name="header"></x-slot>
    @section('title', 'Create notificação')
    @section('content')
    <div>
        <h2 id="subtitulo">Notificaçoes</h2>
    </div>
    <hr style="margin-bottom: 15px;">

    <div class="container">
        <a style="margin-bottom: 10px;" class="btn btn-info" href="{{ route('notifications.allRead')}}">Marcar todos como lido</a>
        
        <div class="row">
            @forelse(Auth::user()->unreadNotifications as $notification)
            <div class="col-md-6 mb-3">
                <div class="card card-custom">
                    <div class="card-body">
                        <h5 class="card-title">{{ $notification->data['title'] }}</h5>
                        <p class="card-text"><strong>Participantes:</strong> {{ $notification->data['participants'] }}</p>
                        <p class="card-text"><strong>Local:</strong> {{ $notification->data['address'] }}</p>
                        <p class="card-text"><strong>Descrição:</strong> {{ $notification->data['description'] }}</p>
                        <p class="card-text"><strong>Data de Execução:</strong> {{ $notification->data['date_execution'] }}</p>
                        <p class="card-text"><strong>Data de Aviso:</strong> {{ $notification->data['date_notice'] }}</p>
                        <p class="card-text"><strong>Horário:</strong> {{ $notification->data['warningTime'] }}</p>
                        <a href="{{ route('notifications.markAsRead', $notification->id)}}" class="btn btn-primary">Marcar como lido</a>
                    </div>
                </div>
            </div>
            @empty
            <div style="margin-bottom: 10px;" class="w-full py-2 px-5 border border-yellow-400 bg-yellow-100 text-yellow-100">
                <p style="color: red;">Sem Notificação ....</p><br>
            </div> 
            @endforelse

            <!-- Mostrar notificações lidas -->
            @forelse(Auth::user()->readNotifications as $notification)
            <div class="col-md-6 mb-3">
                <div class="card card-custom">
                    <div class="card-body">
                        <h5 class="card-title">{{ $notification->data['title'] }}</h5>
                        <p class="card-text"><strong>Participantes:</strong> {{ $notification->data['participants'] }}</p>
                        <p class="card-text"><strong>Local:</strong> {{ $notification->data['address'] }}</p>
                        <p class="card-text"><strong>Descrição:</strong> {{ $notification->data['description'] }}</p>
                        <p class="card-text"><strong>Data de Execução:</strong> {{ $notification->data['date_execution'] }}</p>
                        <p class="card-text"><strong>Data de Aviso:</strong> {{ $notification->data['date_notice'] }}</p>
                        <p class="card-text"><strong>Horário:</strong> {{ $notification->data['warningTime'] }}</p>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
        </div>
    </div>
    @endsection
</x-app-layout>
