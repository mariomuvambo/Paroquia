<x-app-layout>

    <x-slot name="header"> </x-slot>
    @section('title', 'Detalhes')
    @section('content')

    <div>
        <h2 id="subtitulo">Detalhes</h2>
    </div>

    <hr style="margin-bottom: 15px;">

    <div class="container">
        @foreach($detalhes as $detalhes)
        <div class="alert alert-light " role="alert">
            <div class="alert alert-info" role="alert">
                <h4 class="alert-heading"> <strong>{{ $detalhes->nameMinister}}</strong></h4>
            </div>

            <table class="table">
                <thead class="table-secondary">
                    <tr >
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