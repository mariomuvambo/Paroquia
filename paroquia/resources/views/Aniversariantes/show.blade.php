<x-app-layout>
    <x-slot name="header"> </x-slot>
    @section('title', 'Listagem dos Aniversariante')
    @section('content')

    <div class="container">
        <div>
            <h2 id="subtitulo">Registo do aniversariante</h2>
        </div>
        <hr style="margin-bottom: 15px;">

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($aniversariantes as $aniversariantes)
            <div class="col">
                <div class="card">
                    <img src="/img/foto_aniversario/{{$aniversariantes->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $aniversariantes->name}} {{$aniversariantes->surname}}</h5>
                        <p class="card-sexo">Sexo: {{$aniversariantes->gender}}
                        <p class="card-date">Data de aniversario: {{$aniversariantes->date_birth}}</p>

                        <a href="/Aniversariantes/edit/{{ $aniversariantes->id }}" class="btn btn-primary">Editar</a>

                        <form id="form_delete" action="/Aniversariantes/ {{$aniversariantes->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn">Apagar</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection
</x-app-layout>