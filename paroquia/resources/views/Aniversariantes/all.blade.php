<x-app-layout>
    <x-slot name="header"> </x-slot>
    @section('title', 'Lista dos Aniversariantes')
    @section('content')

    <div class="container mt-4">
        <div>
            <h2 id="subtitulo">Todos os Aniversariantes</h2>
        </div>
        <hr style="margin-bottom: 15px;">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            @forelse($lista as $list)
            <div class="col">
                <div class="card custom-card h-100">
                    <img src="/img/foto_aniversario/{{$list->image}}" class="card-img-top" alt="Imagem de aniversário">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $list->name }} {{ $list->surname }}</h5>
                        <p class="card-text">Sexo: {{$list->gender}}</p>
                        <p class="card-text">Data de aniversário: {{$list->date_birth}}</p>
                        <div class="mt-auto">
                            <a href="/Aniversariantes/edit/{{ $list->id }}" class="btn btn-primary">Editar</a>
                            <form id="form_delete" action="/Aniversariantes/{{ $list->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Apagar</button>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Atualizado há 3 minutos</small>
                    </div>
                </div>
            </div>
            @empty
            <p style="color:red; margin-bottom: 15px;">Sem aniversários cadastrados</p>
            @endforelse
        </div>
    </div>

    @endsection
</x-app-layout>
