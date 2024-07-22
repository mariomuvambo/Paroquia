<x-app-layout>
    <x-slot name="header"></x-slot>

    @section('title', 'Create Notificação')
    @section('content')
    <div style="background-color: blue; min-height: 91vh; padding-top: 5px;">
        <div class="container bg-light p-4 rounded shadow-sm">

            <div class="text-center">
                <h2 id="subtitulo">Create Notificação</h2>
            </div>
            <hr style="margin-bottom: 15px;">

            <form action="{{ route('inbox.store') }}" method="post">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="title" class="form-label">Titulo do Aviso</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="date_notice" class="form-label">Data do Aviso</label>
                        <input type="date" class="form-control" name="date_notice" id="date_notice" value="{{ old('date_notice') }}">
                        @error('date_notice') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="address" class="form-label">Local da Realização</label>
                        <input type="text" class="form-control" name="address" id="address" value="{{ old('address') }}">
                        @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="date_execution" class="form-label">Data da Realização</label>
                        <input type="date" class="form-control" name="date_execution" id="date_execution" value="{{ old('date_execution') }}">
                        @error('date_execution') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="participants" class="form-label">Participantes</label>
                        <input type="text" class="form-control" name="participants" id="participants" value="{{ old('participants') }}">
                        @error('participants') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="warningTime" class="form-label">Hora de Realização</label>
                        <input type="time" class="form-control" name="warningTime" id="warningTime" value="{{ old('warningTime') }}">
                        @error('warningTime') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="description" class="form-label">Descrição do aviso</label>
                        <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="text-left">
                    <button class="btn btn-info" type="submit" value="Registar Aviso">Registar Aviso</button>
                </div>
            </form>
        </div>
    </div>
    @endsection
</x-app-layout>
