<x-app-layout>
    <x-slot name="header"> </x-slot>
    @section('title', 'Edit Aniversariante')
    @section('content')
    <div>
        <h2 id="subtitulo">Editando do aniversariante</h2>
    </div> 

    <hr style="margin-bottom: 15px;">

    <div class="container">
        <form action="{{ route('Admin.update', ['aniversariante'=> $aniversariante->id ] ) }}" method="POST" enctype="multipart/form-data">
        
        @csrf
        @method('PUT')

            <div class="row">
                <div class="col-6">
                    <label for="mane" class="form-label">Nome</label>
                    <input type="text" class="form-control" placeholder="Primeiro nome"
                     aria-label="Primeiro name" name="name" id="name" value="{{ $aniversariante->name }}">

                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Sexo</label>
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" 
                                    value="M" {{ $aniversariante->gender === 'M' ? 'checked' : '' }}>

                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Masculino
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" 
                                     value="F" {{ $aniversariante->gender === 'F' ? 'checked' : '' }}>
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
                                 aria-label="Primeiro nome" name="date_birth" id="date_birth" value="{{ $aniversariante->date_birth}}">

                            </div>
                        </div>
                    </div>

                    <div class="bnt_submit">
                        <input type="submit" class="btn btn-info" value="Update">
                    </div>

                </div>

                <div class="col-6">
                    <label for="surname" class="form-label">Apelido</label>
                    <input type="text" class="form-control" placeholder="Apelido" 
                    aria-label="surname" name="surname" value="{{$aniversariante->surname }}">

                    <div class="col">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Foto do Aniversariante</label>
                            <input class="form-control" type="file" id="image" name="image">
                            <img src="/img/foto_aniversario/{{$aniversariante->image}}" alt="" class="preview_img"> 
                        </div>
                    </div>
                </div>

            </div>
        </form>

    </div>

    @endsection

</x-app-layout>