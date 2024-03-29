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
                        <h4>We would love to hear from you !</h4>
                    </div>
                </div>


                <div class="col-md-9">
                    <div class="contact-form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="fname">First Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" placeholder="Enter First Name"
                                    name="name" value="{{ Auth::user()->name}}">
                            </div>
                        </div> 

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="surname">Last Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="surname" placeholder="Enter Last Name"
                                    name="surname">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="Enter email"
                                    name="email" value="{{ Auth::user()->email}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="phone">Phone:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="phone" name="phone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="message">message:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" name="message" id="message"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-info">Submit</button>
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