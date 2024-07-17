<x-app-layout>

    <x-slot name="header"> </x-slot>
    @section('title', 'Create notificação')
    @section('content')
    <div>
        <h2 id="subtitulo">Create Notificação</h2>
    </div>
    <hr style="margin-bottom: 15px;">


    <div class="container">
 

        <form action="{{ route('inbox.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="title">Titulo do Aviso</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}">
                    @error('title') <span class="text-danger" > {{$message }}</span> @enderror

                </div>

                <div class="col">
                    <label for="date_notice">Data do Aviso</label>
                    <input type="date" class="form-control" name="date_notice" id="date_notice" value="{{old('date_notice')}}" >
                    @error('date_notice') <span class="text-danger" > {{$message }}</span> @enderror

                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="address">Local da Realização</label>
                    <input type="text" class="form-control" name="address" id="address" value="{{old('address')}}" >
                    @error('address') <span class="text-danger" > {{$message }}</span> @enderror

                </div>

                <div class="col">
                    <label for="date_execution">Data da Realização</label>
                    <input type="date" class="form-control" name="date_execution" id="date_execution" value="{{ old('date_execution') }}">
                    @error('date_execution') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <label for="participants">Participantes</label>
                    <input type="text" class="form-control" name="participants" id="participants" value="{{old('participants')}}">
                    @error('participants') <span class="text-danger" > {{$message }}</span> @enderror

                </div>

                <div class="col">
                    <label for="warningTime">Hora de Realização</label>
                    <input type="time" class="form-control" name="warningTime" id="warningTime" value="{{ old('warningTime') }}">
                    @error('warningTime') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="exampleFormControlTextarea1" class="form-label">Descrição do aviso</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"
                        id="description" >{{old('description')}}</textarea>
                @error('description') <span class="text-danger" > {{$message }}</span> @enderror

                        
                </div>
            </div>
            <br>
            <button style="margin-bottom: 15px" class="btn btn-info" type="submit" value="Registar Aviso"> Registar Aviso</button>
        </form>
    </div>

    

    @endsection

</x-app-layout>