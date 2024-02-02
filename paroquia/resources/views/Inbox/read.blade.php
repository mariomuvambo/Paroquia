<x-app-layout>

    <x-slot name="header"> </x-slot>
    @section('title', 'Create notificação')
    @section('content')
    <div>
        <h2 id="subtitulo">Create Notificação</h2>
    </div>
    <hr style="margin-bottom: 15px;">



<div class="container">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

</div>

@endsection

</x-app-layout>