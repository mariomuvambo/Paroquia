<x-app-layout>

    <x-slot name="header"> </x-slot>
    @section('title', 'Ministérios')
    @section('content')
    <div>
        <h2 id="subtitulo">Adicionar ao Ministério</h2>
    </div>
    <hr style="margin-bottom: 15px;">

    <div class="container">
        <form action="{{ route('ministerio.store') }}" method="post" >
            @csrf
              <div class="row">
                <div class="col-5">
                    <label class="form-label">Adicionar Ministério</label>
                    <input type="text" class="form-control" placeholder="Novo ministério" aria-label="nameMinister"
                        name="nameMinister" id="nameMinister" >
                </div>

            </div>

            <div class="row">
                <div class="col-5">
                    <label for="exampleFormControlTextarea1" class="form-label">Finalidade</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="finalidade"
                        id="finalidade">
                    </textarea>
                </div>

                <div class="col-5">
                    <label for="exampleFormControlTextarea1" class="form-label">Tarefas do responsável do
                        Ministério</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tarefa_resp_minister" id="tarefa_resp_minister"></textarea>
                </div>

            </div>

            <div class="row">
                <div class="col-5">
                    <label for="exampleFormControlTextarea1" class="form-label">Tarefas do responsável adjunto</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tarefa_resp_adjunt" id="tarefa_resp_adjunt"></textarea>
                </div>

                <div class="col-5">
                    <label for="exampleFormControlTextarea1" class="form-label">Tarefas dos sectores em geral</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" 
                    name="tarefa_sector_geral" id="tarefa_sector_geral"></textarea>
                    
                </div>
        
            </div>

            <div class="row">
                <div class="col-5">
                    <label for="exampleFormControlTextarea1" class="form-label">Sectores do Ministérios</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" 
                    name="sectores_minister" id="sectores_minister"></textarea>
                </div>
            </div>

            <button class="btn btn-outline-primary" type="submit" style="margin-top: 10px; margin-bottom: 30px;" value="Registar">Registar Ministerio</button>

        </form>
    </div>

    @endsection

</x-app-layout>