<x-app-layout>

    <x-slot name="header"> </x-slot>
    @section('title', 'Create notificação')
    @section('content')
    <div>
        <h2 id="subtitulo">Create Notificação</h2>
    </div>
    <hr style="margin-bottom: 15px;">


    <div class="container">


    <div class="row">
            <div class="col">
                <label for="title">Titulo do Aviso</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>

            <div class="col">
                <label for="DateNotice">Data do Aviso</label>
                <input type="date" class="form-control" name="DateNotice" id="DateNotice">

            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="Address">Local da Realização</label>
                <input type="text" class="form-control" name="Address" id="Address">


            </div>

            <div class="col">
                <label for="DateExecution">Data da Realização </label>
                <input type="date" class="form-control" name="DateExecution" id="DateExecution">

            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="participants">Participantes</label>
                <input type="text" class="form-control" name="participants" id="participants">

            </div>

            <div class="col">
                <label for="warningTime">Hora de Realização</label>
                <input type="time" class="form-control" name="warningTime" id="warningTime">
            </div>

        </div>

    
        <div class="row">
            <div class="col">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição do aviso</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" id="description">{{ old('descricaoAviso')}}</textarea>
                
            </div>
        </div>
        <br>


        <button class="btn btn-info" type="submit" value="Registar Aviso"> Registar Aviso</button>

    </div>

@endsection

</x-app-layout>