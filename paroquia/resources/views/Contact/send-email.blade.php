<x-app-layout>

    <x-slot name="header"> </x-slot>
    @section('title', 'Contact Us')
    @section('content')
    <div>
        <h2 id="subtitulo">Contact Us</h2>
    </div>
    <hr style="margin-bottom: 15px;">
    <form action="{{ route('contact.sendEmail') }}" method="post">
        @csrf
        <div class="container contact">
            <div class="row">
                <div class="col-md-3">
                    <div class="contact-info">
                        <img src="https://st.depositphotos.com/3643473/5136/i/950/depositphotos_51364905-stock-photo-keyboard-conctact-us.jpg"
                            alt="image" />
                        <h2>Contact Us</h2>
                        <h4> Gostaríamos de poder ouvir te sobre nos !</h4>
                    </div>
                </div>


                <div class="col-md-9">
                    <div class="contact-form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="fname">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" placeholder="Enter First Name"
                                    name="name" value="{{ Auth::user()->name}}">
                                    @error('name') <span class="text-danger" > {{$message }}</span> @enderror
                            </div>

                        </div> 

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="surname">Apelido:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="surname" placeholder="Enter Last Name"
                                    name="surname">
                                    @error('surname') <span class="text-danger" > {{$message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="Enter email"
                                    name="email" value="{{ Auth::user()->email}}">
                                    @error('email') <span class="text-danger" > {{$message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="phone">Telefone:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="phone" name="phone">
                                @error('phone') <span class="text-danger" > {{$message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="message">Mensagem:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" name="message" id="message">{{old('message')}}</textarea>
                                @error('message') <span class="text-danger" > {{$message }}</span> @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-info">Submeter</button>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </form>

    @endsection

</x-app-layout>