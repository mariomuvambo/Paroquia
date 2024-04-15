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
    @forelse($aniversariantes as $aniversariante)
    <div class="col">
        <div class="card">
            <img src="/img/foto_aniversario/{{ $aniversariante->image }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $aniversariante->name }} {{ $aniversariante->surname }}</h5>
                <p class="card-sexo">Sexo: {{ $aniversariante->gender }}</p>
                <p class="card-date">Data de aniversário: {{ $aniversariante->date_birth }}</p>

                <a href="/Aniversariantes/edit/{{ $aniversariante->id }}" class="btn btn-primary">Editar</a>

                <form id="form_delete_{{ $aniversariante->id }}" action="/Aniversariantes/{{ $aniversariante->id }}" method="POST">
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
    @empty
    <p style="color:red; margin-bottom: 15px;">Sem aniversários cadastrados</p>
    @endforelse

</div>

    </div>
    @endsection
</x-app-layout>