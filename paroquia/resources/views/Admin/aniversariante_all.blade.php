<x-app-layout>
    <x-slot name="header"> </x-slot>
    @section('title', 'Listagem dos Aniversariante')
    @section('content')

    <div class="container">

        <div>
            <h2 id="subtitulo">Todos aniversariante</h2>
        </div>
        <hr style="margin-bottom: 15px;">

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @forelse($lista as $list)
            <div class="col">
                <div class="card">
                    <img src="/img/foto_aniversario/{{$list->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $list->name}} {{$list->surname}}</h5>
                        <p class="card-sexo">Sexo: {{$list->gender}}
                        <p class="card-date">Data de aniversario: {{$list->date_birth}}</p>

                        <a href=" {{ route('Admin.edit', ['aniversariante' => $list->id  ]) }}"
                            class="btn btn-primary">Editar</a> 
  

                        <form id="form_delete" action="{{ route('Admin.destroy', ['aniversariante' => $list->id]) }}"
                            method="POST">
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