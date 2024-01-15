<x-app-layout>

    <x-slot name="header"> </x-slot>
    @section('title', 'Lista dos Ministérios')
    @section('content')
    <div>
        <h2 id="subtitulo">Lista dos Ministérios</h2>
    </div>
    <hr style="margin-bottom: 15px;">

    <div class="container">
        <div class="row">
            @foreach($lista_ministerio as $lista)
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card text-end">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold;">{{$lista->nameMinister}}</h5>
                        <p class="card-text">{{$lista->finalidade}}</p>
                    
                        <a href="{{ route('adminministerios.edit', ['id' => $lista->id]) }}" class="btn 
                        btn-primary details-btn">
                            Editar
                        </a>

                        <form id="form_delete" action="{{ route('adminministerios.destroy', ['id' => $lista->id]) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn">Delete</button>
                        </form>

                    </div>
                </div>
            </div>
            @endforeach
        </div>


    </div>


    @endsection
</x-app-layout>