<x-app-layout>

    <x-slot name="header"> </x-slot>
    @section('title', 'show')
    @section('content')
    <div>
        <h2 id="subtitulo">Lista do Registo dos Ministérios</h2>
    </div>
    <hr style="margin-bottom: 15px;">

    <div class="container">


        <div class="row">
        @foreach($Userministerio as $Userministerio)
            <div class="col-sm-6 mb-3 mb-sm-0">
           
                <div class="card">
                    
                    <div class="card-body" style="text-align:center;">
                        <h5 class="card-title" > <strong>** {{ $Userministerio->selecioneMinisterio }} ** </strong></h5>
                        <p class="card-text">Nome: {{ $Userministerio->nome }} {{ $Userministerio->apelido }}</p>
                        <p class="card-text">Contacto: {{ $Userministerio->contacto }}</p>

                        <a href="{{ route('ministerio.edit', ['id' => $Userministerio->id]) }}" class="btn 
                        btn-primary details-btn">
                            Editar
                        </a>
                        
                    </div>
                  
                </div>
             
            </div>
              @endforeach

        </div>

    </div>

    @endsection

</x-app-layout>