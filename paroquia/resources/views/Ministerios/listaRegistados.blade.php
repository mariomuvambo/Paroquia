<x-app-layout>

    <x-slot name="header"> </x-slot>
    @section('title', 'Registados nos Ministérios')
    @section('content')
    <div>
        <h2 id="subtitulo">Registados nos Ministérios</h2>
    </div>
    <hr style="margin-bottom: 15px;">
    <div class="container">



<table class="table caption-top">
  <caption>Lista de usuarios Registados</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ministerio</th>
      <th scope="col">Nome</th>
      <th scope="col">Contacto</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  @foreach($ministerios as $Userministerio)
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{ $Userministerio->selecioneMinisterio }}</td>
      <td> {{ $Userministerio->nome }} {{$Userministerio->apelido }}</td>
      <td>{{ $Userministerio->contacto }}</td>
      <td> <a href="{{ route('ministerio.edit', ['id' => $Userministerio->id]) }}" class="btn 
                                         btn-primary details-btn">Editar
                                </a> | <a href=" {{ route('adminministerios.show') }} " class="btn 
                                         btn-secondary details-btn"> Detalhes</a></td>

    </tr>
@endforeach
  </tbody>
</table>


   
    @endsection
</x-app-layout>