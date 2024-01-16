<x-app-layout>

    <x-slot name="header"> </x-slot>
    @section('title', 'Detalhes')
    @section('content')

    <div>
        <h2 id="subtitulo">Detalhes</h2>
    </div>

    <hr style="margin-bottom: 15px;">

    <div class="container">
        @foreach($detalhes as $detalhes)
        <div class="alert alert-primary " role="alert">
            <h4 class="alert-heading"> <strong>{{ $detalhes->nameMinister}}</strong></h4>
            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit
                longer so that you can see how spacing within an alert works with this kind of content.</p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
        </div>
        @endforeach


    </div>

    @endsection
</x-app-layout>