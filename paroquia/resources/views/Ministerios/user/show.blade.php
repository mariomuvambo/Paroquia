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
                    <div class="card-body">
                        <h5 class="card-title"><strong>Ministerio: </strong>{{ $Userministerio->selecioneMinisterio }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted"> <strong>Nome:</strong> {{ $Userministerio->nome }} {{
                            $Userministerio->apelido }}</h6>
                        <p class="card-text"><strong>Contacto:</strong> {{ $Userministerio->contacto }}</p>
                        <div class="card-footer">
                            <small class="text-muted">
                                <a href="{{ route('ministerio.edit', ['id' => $Userministerio->id]) }}" class="btn 
                                         btn-primary details-btn">Editar
                                </a>
                                <a href=" {{ route('adminministerios.show') }} " class="btn 
                                         btn-secondary details-btn"> Detalhes</a>
                            </small>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>

    @endsection

</x-app-layout>