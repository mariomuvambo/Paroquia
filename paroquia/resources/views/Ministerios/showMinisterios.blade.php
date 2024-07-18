<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes dos Ministérios') }}
        </h2>
    </x-slot>

    @section('title', 'Detalhes')
    @section('content')

    <div class="container mt-5">

        <div class="text-center mb-4">
            <h2 id="subtitulo">Ministérios</h2>
        </div>
        <hr style="margin-bottom: 15px;">

        <div class="row justify-content-center mb-4">
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-light d-flex justify-content-center align-items-center">
                        <form class="d-flex w-100" role="search" method="GET" action="/Ministerios/showMinisterios">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="bi bi-search"></i>
                                </span>
                                <input class="form-control form-control-lg me-2" type="search" placeholder="Search" aria-label="Search" id="search" name="search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @if($search)
        <div class="text-center mb-4">
            <h3>Pesquisado por: {{ $search }}</h3>
        </div>
        @else
        <div class="text-center mb-4">
            <h3>Lista de Ministérios</h3>
        </div>
        @endif

        @foreach($detalhes as $detalhes)
        <div class="alert alert-light shadow-sm rounded mb-4" role="alert">
            <div class="alert alert-info rounded-top" role="alert">
                <h4 class="alert-heading text-center"><strong>{{ $detalhes->nameMinister }}</strong></h4>
            </div>

            <table class="table table-hover mt-3">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">Finalidade</th>
                        <th scope="col">{{ $detalhes->finalidade }}</th>
                    </tr>
                </thead>
                <tbody class="table-secondary">
                    <tr>
                        <th scope="row">Tarefa de responsável do Ministério</th>
                        <td>{{ $detalhes->tarefa_resp_minister }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Tarefa de responsável do Adjunto</th>
                        <td>{{ $detalhes->tarefa_resp_adjunt }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Tarefa de responsável do Sector Geral</th>
                        <td>{{ $detalhes->tarefa_sector_geral }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Sectores do Ministério</th>
                        <td>{{ $detalhes->sectores_minister }}</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <p class="mb-0 text-center">Date: {{ $detalhes->created_at }}</p>
        </div>
        @endforeach

    </div>

    @endsection
</x-app-layout>