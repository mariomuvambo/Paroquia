<x-app-layout>

    <x-slot name="header"> </x-slot>
    @section('title', 'Detalhes')
    @section('content')


    <div class="container">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mx-auto" style="max-width: 600px; margin:20px;">
                        <div class="card-header">
                            <h6 class="font-weight-bold" style="float:left; font-size: 22px;"> <strong>Detalhes</strong> </h6>
                            <a href ="{{ route('ministerio.createUser') }}" class="btn btn-sm btn-primary" style="float:right">Registar</a>
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
        <p class="mb-0">Date: 12.12.22</p>
        @endforeach

    </div>
    </div>

    @endsection
</x-app-layout>