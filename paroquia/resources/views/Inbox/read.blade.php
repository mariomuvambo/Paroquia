<x-app-layout>

  <x-slot name="header"> </x-slot>
  @section('title', 'Create notificação')
  @section('content')
  <div>
    <h2 id="subtitulo">Create Notificação</h2>
  </div>
  <hr style="margin-bottom: 15px;">


  <div class="container">


  @forelse (optional(Auth::user()->unreadNotifications)->all() ?? [] as $notification)
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{  $notification->title }}</strong> Você deveria verificar alguns desses campos abaixo.
        <a type="button" class="btn-close" aria-label="Close" href="{{ route('marcarLido', $notification->id) }}">X</a>
    </div>
@empty
    <div class="w-full py-2 px-5 border border-yellow-500 bg-yellow-100 text-yellow-100">
        OBRIGADO POR SE REGISTRAR NO SISTEMA!
        <p style="color: red;">Nenhuma notificação encontrada....</p>
    </div>
@endforelse






  </div>

  @endsection

</x-app-layout>