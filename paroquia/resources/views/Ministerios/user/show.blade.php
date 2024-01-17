<x-app-layout>

    <x-slot name="header"> </x-slot>
    @section('title', 'show')
    @section('content')
    <div>
        <h2 id="subtitulo">Registados nos Ministérios</h2>
    </div>
    <hr style="margin-bottom: 15px;">

    <div class="container">


        <div class="row">
        @foreach($Userministerio as $Userministerio)
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $Userministerio->selecioneMinisterio }}</li>
                        <li class="list-group-item">{{ $Userministerio->nome }} {{ $Userministerio->apelido }}</li>
                        <li class="list-group-item"> {{ $Userministerio->contacto }}</li>
                    </ul>
                    <div class="card-footer">
                    <a href="{{ route('ministerio.edit', ['id' => $Userministerio->id]) }}" class="btn 
                        btn-primary details-btn">
                            Editar
                        </a>
                        <a href=" {{ route('adminministerios.show') }} " class="btn 
                        btn-secondary details-btn"> Detalhes</a>
                    </div>
                </div>
            </div>
            @endforeach

           
        </div>

    </div>

    @endsection

</x-app-layout>