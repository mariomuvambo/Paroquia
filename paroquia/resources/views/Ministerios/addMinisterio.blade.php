<x-app-layout>
    <x-slot name="header"> </x-slot>
    @section('title', 'Ministérios')
    @section('content')
    <div>
        <h2 id="subtitulo">Adicionar ao Ministério</h2>
    </div>
    <hr style="margin-bottom: 15px;">

    <div class="container mt-4">
    <form action="/Ministerios/addMinisterio" method="post">
        @csrf

        <!-- Campo para Adicionar Ministério -->
        <div class="mb-3">
            <label for="nameMinister" class="form-label">Adicionar Ministério</label>
            <input type="text" class="form-control" placeholder="Novo ministério" name="nameMinister" id="nameMinister">
        </div>

        <!-- Finalidade e Tarefas do Responsável do Ministério -->
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Finalidade" id="finalidade" name="finalidade" rows="4"></textarea>
                    <label for="finalidade">Finalidade</label>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Tarefas do responsável do Ministério" id="tarefa_resp_minister" name="tarefa_resp_minister" rows="4"></textarea>
                    <label for="tarefa_resp_minister">Tarefas do responsável do Ministério</label>
                </div>
            </div>
        </div>

        <!-- Tarefas do Responsável Adjunto e dos Sectores em Geral -->
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Tarefas do responsável adjunto" id="tarefa_resp_adjunt" name="tarefa_resp_adjunt" rows="4"></textarea>
                    <label for="tarefa_resp_adjunt">Tarefas do responsável adjunto</label>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Tarefas dos sectores em geral" id="tarefa_sector_geral" name="tarefa_sector_geral" rows="4"></textarea>
                    <label for="tarefa_sector_geral">Tarefas dos sectores em geral</label>
                </div>
            </div>
        </div>

        <!-- Sectores do Ministério -->
        <div class="mb-3">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Sectores do Ministério" id="sectores_minister" name="sectores_minister" rows="4"></textarea>
                <label for="sectores_minister">Sectores do Ministério</label>
            </div>
        </div>

        <!-- Botão de Submissão -->
        <button class="btn btn-outline-primary" type="submit">Registar Ministério</button>
    </form>
</div>


    @endsection

</x-app-layout>