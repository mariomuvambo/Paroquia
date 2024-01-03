<x-app-layout>
    <x-slot name="header"> </x-slot>
    @section('title', 'create Aniversariante')
    @section('content')

    <div class="container">

        <div>
            <h2 id="subtitulo">Registo do aniversariante</h2>
        </div>
        <hr style="margin-bottom: 15px;">

        <hr style="margin-bottom: 15px;">


        <form action="/Aniversariantes" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="row">
                <div class="col-6">
                    <label for="mane" class="form-label">Nome</label>
                    <input type="text" class="form-control" placeholder="Primeiro nome" aria-label="Primeiro name"
                        name="name" id="name">

                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Sexo</label>
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1"
                                        value="M">

                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Masculino
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1"
                                        value="F">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Femenino
                                    </label>
                                </div>
                            </div>

                        </div>

                        <div class="col">
                            <div class="col">
                                <label for="exampleFormControlInput1" class="form-label">Data de Nascimento</label>
                                <input type="date" class="form-control" placeholder="Primeiro nome"
                                    aria-label="Primeiro nome" name="date_birth" id="date_birth">

                            </div>
                        </div>
                    </div>

                    <div class="bnt_submit">
                        <input type="submit" class="btn btn-info" value="Registar">
                    </div>

                </div>

                <div class="col-6">
                    <label for="surname" class="form-label">Apelido</label>
                    <input type="text" class="form-control" placeholder="Apelido" aria-label="surname" name="surname">

                    <div class="col">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Foto do Aniversariante</label>
                            <input class="form-control" type="file" id="image" name="image">
                        </div>
                    </div>
                </div>

            </div>
        </form>

    </div>

    @endsection



</x-app-layout>