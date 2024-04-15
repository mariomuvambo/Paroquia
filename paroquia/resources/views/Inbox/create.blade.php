<x-app-layout>

    <x-slot name="header"> </x-slot>
    @section('title', 'Create notificação')
    @section('content')
    <div>
        <h2 id="subtitulo">Create Notificação</h2>
    </div>
    <hr style="margin-bottom: 15px;">


    <div class="container">
        <form action="{{ route('inbox.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="title">Titulo do Aviso</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>

                <div class="col">
                    <label for="date_notice">Data do Aviso</label>
                    <input type="date" class="form-control" name="date_notice" id="date_notice">

                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="address">Local da Realização</label>
                    <input type="text" class="form-control" name="address" id="address">
                </div>

                <div class="col">
                    <label for="date_execution">Data da Realização </label>
                    <input type="date" class="form-control" name="date_execution" id="date_execution">
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
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"
                        id="description"></textarea>
                </div>
            </div>
            <br>
            <button style="margin-bottom: 15px" class="btn btn-info" type="submit" value="Registar Aviso"> Registar Aviso</button>
        </form>
    </div>
    

    @endsection

</x-app-layout>