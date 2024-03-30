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

    @foreach ($notifications as $notification)
    <tr>
        <td>{{ $notification->title }}</td>
        <td>{{ $notification->Address }}</td>
        <td>{{ $notification->participants }}</td>
        <!-- Adicione mais colunas conforme necessário -->
        <td>
            @if ($notification->read_at === null)
                <form action="{{ route('notifications.markAsRead', $notification) }}" method="POST">
                    @csrf
                    <button type="submit">Marcar como lida</button>
                </form>
            @else
                <span>Lida</span>
            @endif
        </td>
    </tr>
@endforeach




  </div>

  @endsection

</x-app-layout>