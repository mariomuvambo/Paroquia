<x-app-layout>

    <x-slot name="header"> </x-slot>
    @section('title', 'Detalhes')
    @section('content')

    <div>
        <h2 id="subtitulo">Ministérios</h2>
    </div>
    <hr style="margin-bottom: 15px;">

    <div class="container">

        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card-header d-flex justify-content-center align-items-center">
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

            @if($search)
            <h1 style="margin:10px;">Pesquisado por: {{ $search  }}</h1>
            @else
            @endif

            @foreach($detalhes as $detalhes)
            <div class="alert alert-light " role="alert">
                <div class="alert alert-info" role="alert">
                    <h4 class="alert-heading"> <strong>{{ $detalhes->nameMinister}}</strong></h4>
                </div>

                <table class="table">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">Finalidade</th>
                            <th scope="col">{{ $detalhes->finalidade}}</th>
                        </tr>
                    </thead>
                    <tbody class="table-secondary">
                        <tr>
                            <th scope="row">Tarefa de responsável do Ministério </th>
                            <td>{{ $detalhes->tarefa_resp_minister}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Tarefa de responsável do Adjunto </th>
                            <td>{{ $detalhes->tarefa_resp_adjunt}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Tarefa de responsável do Sector Geral </th>
                            <td>{{ $detalhes->tarefa_sector_geral}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Sectores do Ministério </th>
                            <td>{{ $detalhes->sectores_minister}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <hr>
            <p class="mb-0">Date: {{$detalhes->created_at}}</p>
            @endforeach



        </div>
    </div>
    </div>


    @endsection
</x-app-layout>