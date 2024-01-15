<x-app-layout>

    <x-slot name="header"> </x-slot>
    @section('title', 'Ministérios')
    @section('content')
    <div>
        <h2 id="subtitulo">Adicionar ao Ministério</h2>
    </div>
    <hr style="margin-bottom: 15px;">

    <div class="container">
        <form action="/Ministerios/addMinisterio" method="post">
            @csrf

            <div class="row">
                <div class="col-5">

                    <label class="form-label">Adicionar Ministério</label>
                    <input type="text" class="form-control" placeholder="Novo ministério" aria-label="nameMinister"
                        name="nameMinister" id="nameMinister">
                </div>
            </div>

            <div class="row">
                <div class="col-5">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px;" name="finalidade" id="finalidade"></textarea>
                        <label for="floatingTextarea2" style="font-weight: bold;">Finalidade</label>
                    </div>
                </div>

                <div class="col-5">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px" name="tarefa_resp_minister" id="tarefa_resp_minister"></textarea>
                        <label for="floatingTextarea2" style="font-weight: bold;">Tarefas do responsável do
                            Ministério</label>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-5">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" style="height: 100px"
                            name="tarefa_resp_adjunt" id="tarefa_resp_adjunt"></textarea>
                        <label for="floatingTextarea2" style="font-weight: bold;">Tarefas do responsável adjunto</label>
                    </div>
                </div>

                <div class="col-5">

                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px" name="tarefa_sector_geral" id="tarefa_sector_geral"></textarea>
                        <label for="floatingTextarea2" style="font-weight: bold;">Tarefas dos sectores em geral</label>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-5">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px" name="sectores_minister" id="sectores_minister"></textarea>
                        <label for="floatingTextarea2" style="font-weight: bold;">Sectores do Ministérios</label>
                    </div>

                </div>

            </div>

            <button class="btn btn-outline-primary" type="submit" style="margin-top: 10px; margin-bottom: 30px;"
                value="Registar">Registar Ministerio</button>

        </form>
    </div>

    @endsection

</x-app-layout>