<x-app-layout>

  <x-slot name="header"> </x-slot>
  @section('title', 'Create notificação')
  @section('content')
  <div>
    <h2 id="subtitulo">Create Notificação</h2>
  </div>
  <hr style="margin-bottom: 15px;">


  <div class="container">


    <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong></strong> Você deveria verificar alguns desses campos abaixo.
        <a type="button" class="btn-close" aria-label="Close" href="">X</a>
    </div>
    
    <div class="w-full py-2 px-5 border border-yellow-500 bg-yellow-100 text-yellow-100">
        OBRIGADO POR SE REGISTRAR NO SISTEMA!
        <p style="color: red;">Nenhuma notificação encontrada....</p>
    </div> -->

<!-- resources/views/Inbox/read.blade.php -->

@foreach($notifications as $notification)
    <li>
        <p>{{ $notification->title }}</p>
        <p>{{ $notification->participants }}</p>
        <p>{{ $notification->address }}</p>
        <p>{{ $notification->date_execution }}</p>
        <p>{{ $notification->date_notice }}</p>
        <p>{{ $notification->warmingtime }}</p>
        
        <!-- Adicione um formulário para marcar como lida -->
        @unless($notification->read_at)
            <form action="{{ route('notifications.markAsRead', $notification->id) }}" method="POST">
                @csrf
                <button type="submit">Marcar como lida</button>
            </form>
        @endunless
    </li>
@endforeach

 

  @endsection

</x-app-layout>