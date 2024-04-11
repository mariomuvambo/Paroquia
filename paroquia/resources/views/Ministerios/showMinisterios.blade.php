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
            <div class="row">
                <div class="col-md-4">
                    <div class="card mx-auto" style="max-width: 600px; margin:20px;">
                        <div class="card-header">
                            <h6 class="font-weight-bold" style="float:left; font-size: 22px;"> <strong>Detalhes</strong> </h6>
                            <a href ="{{ route('ministerio.createUser') }}" class="btn btn-sm btn-primary" style="float:right">Registar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card mx-auto" style="max-width: 600px; margin:20px;">
                    <div class="card-header">

                        <form class="d-flex" role="search">
                            <input class="form-control me-4" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>

                        </div>
                        </div>
                    </div>
                </div>
        </div>


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

    @endsection
</x-app-layout>