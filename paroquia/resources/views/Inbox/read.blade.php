<x-app-layout>

  <x-slot name="header"> </x-slot>
  @section('title', 'Create notificação')
  @section('content')
  <div>
    <h2 id="subtitulo">Create Notificação</h2>
  </div>
  <hr style="margin-bottom: 15px;">



  <div class="container">
    @foreach($mail as $mail)

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Holy guacamole!</strong> You should check in on some of those fields below.
      <a class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
       
    </div>

    @endforeach

  </div>

  @endsection

</x-app-layout>