<x-app-layout>

    <x-slot name="header"> </x-slot>
    @section('title', 'show')
    @section('content')
    <div>
        <h2 id="subtitulo">Lista Ministério</h2>
    </div>
    <hr style="margin-bottom: 15px;">

    <div class="container">


        <div class="row">
        @foreach($Userministerio as $Userministerio)
            <div class="col-sm-6 mb-3 mb-sm-0">
           
                <div class="card">
                    
                    <div class="card-body">
                        <h5 class="card-title">{{ $Userministerio->selecioneMinisterio }} </h5>
                        <p class="card-text">{{ $Userministerio->nome }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  
                </div>
             
            </div>
              @endforeach

        </div>

    </div>

    @endsection

</x-app-layout>