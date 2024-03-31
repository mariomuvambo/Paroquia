<x-app-layout>

  <x-slot name="header"> </x-slot>
  @section('title', 'Create notificação')
  @section('content')
  <div>
    <h2 id="subtitulo">Create Notificação</h2>
  </div>
  <hr style="margin-bottom: 15px;">


  <div class="container">

  <a class="btn btn-info" href="{{ route('notifications.allRead')}}" >Marcar todos como lido</a>

@forelse(Auth::user()->unreadNotifications as $notification)

  <div class="alert alert-primary" role="alert">
    <strong>{{ $notification->data['title'] }}</strong>
 {{ $notification->data['participants'] }} {{ $notification->data['address'] }}  {{ $notification->data['date_execution'] }}
{{ $notification->data['date_notice' ]}} {{ $notification->data['warningTime' ]}}
     <a style="float: right" href="{{ route('notifications.markAsRead', $notification->id)}}" >X</a>
</div>
@empty

<div class="w-full py-2 px-5 border border-yellow-500 bg-yellow-100 text-yellow-100">
        OBRIGADO POR SE REGISTRAR NO SISTEMA!
        <p style="color: red;">Nenhuma notificação encontrada....</p>
    </div> 



    </li>
@endforelse

<!-- Mostrar notificações lidas -->
@forelse(Auth::user()->readNotifications as $notification)
  <div class="alert alert-secondary" role="alert">
    <strong>{{ $notification->data['title'] }}</strong>
    {{ $notification->data['participants'] }} {{ $notification->data['address'] }}  {{ $notification->data['date_execution'] }}
    {{ $notification->data['date_notice'] }} {{ $notification->data['warningTime'] }}
    <!-- Adicione aqui o link para marcar como não lida, se necessário -->
  </div>
@empty
  <div class="w-full py-2 px-5 border border-gray-500 bg-gray-100 text-gray-100">
    <p>Nenhuma notificação lida encontrada...</p>
  </div> 
@endforelse


 

  @endsection

</x-app-layout>