<x-app-layout>
  <x-slot name="header">
  </x-slot>

  @section('title', 'Registados nos Ministérios')
  @section('content')
  <div class="container mt-4">
    <div class="text-center mb-4">
      <h2 id="subtitulo" >Registados nos Ministérios</h2>
    </div> 
    <hr style="margin-bottom: 15px;">

    <div class="d-flex justify-content-end mb-3">
      <a  class="btn btn-warning" href="/Admin/ministerios/print">PDF</a>
    </div>

    <div class="table-responsive">
      <table class="table table-hover table-striped table-bordered">
        <caption>Lista de usuários Registados</caption>
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Ministério</th>
            <th scope="col">Nome</th>
            <th scope="col">Contacto</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($ministerios as $userMinisterio)
          <tr>
            <th scope="row">{{ $userMinisterio->id }}</th>
            <td>{{ $userMinisterio->selecioneMinisterio }}</td>
            <td>{{ $userMinisterio->nome }} {{ $userMinisterio->apelido }}</td>
            <td>{{ $userMinisterio->contacto }}</td>
            <td>
              <a href="{{ route('ministerio.edit', ['id' => $userMinisterio->id]) }}" class="btn btn-primary details-btn">Editar</a> |
              <a href="{{ route('adminministerios.show', ['id' => $userMinisterio->id]) }}" class="btn btn-secondary details-btn">Detalhes</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  @endsection
</x-app-layout>

<!-- Adicionando o CSS compilado -->
<link rel="stylesheet" href="{{ asset('css/listaRegistados.css') }}">
