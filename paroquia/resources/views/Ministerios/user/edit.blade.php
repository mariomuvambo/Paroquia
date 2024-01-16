<x-app-layout>

    <x-slot name="header"> </x-slot>
    @section('title', 'Editar Dados Registados dos Ministérios')
    @section('content')

    <div>
        <h2 id="subtitulo">Editar Registados nos Ministérios</h2>
    </div>

    <hr style="margin-bottom: 15px;">


    <div class="container">
        <form action=" {{ route('ministerio.update', ['id' => $editar->id]) }} " method="post">
            @csrf
            <div class="row">

                <div class="col-6">
                    <label for="">Selecione o Ministério</label>
                    <select class="form-select form-select-md" aria-label=".form-select-sm example"
                        name="selecioneMinisterio" id="selecioneMinisterio">
                    </select>

                </div>
                <div class="col-6">
                    <label for="">Detalhes dos Ministerio</label>
                    <a href="" class="btn btn-primary" style="padding-left: 20px;">Detalhes</a>
                </div>

            </div>
            <div class="row">
                <hr style="margin-bottom: 15px; margin-top: 10px;">
            </div>

            <div class="row">
                <div class="col-3">
                    <label for="">Nome</label>
                    <input type="text" class="form-control" placeholder="Primeiro nome" aria-label="Primeiro nome"
                        name="nome" id="apelido" value="{{ $editar->nome}}">

                </div>
                <div class="col-3">
                    <label for="">Apelido</label>
                    <input type="text" class="form-control" placeholder="Apelido" aria-label="Apelido" name="apelido"
                        id="apelido" value="{{ $editar->apelido}}">
                </div>

                <div class="col-3">
                    <label for="">Contacto</label>
                    <input type="number" class="form-control" placeholder="Apenas um contacto" aria-label="contacto"
                        name="contacto" id="contacto" value="{{ $editar->contacto}}">>

                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <button class="btn btn-outline-primary" type="submit" style="margin-top: 10px; margin-bottom: 30px;"
                        value="Inscrever">Editar</button>
                </div>
            </div>

        </form>
    </div>

    @endsection
</x-app-layout>