<x-app-layout>

  <x-slot name="header"> </x-slot>
  @section('title', 'User')
  @section('content')
  <div>
    <h2 id="subtitulo">Show User</h2>
  </div>
  <hr style="margin-bottom: 15px;">

  <div class="container">

    <table class="table">
      <thead>
        <tr class="table-info">
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Nível de acesso</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($user as $user)
        <tr>
          <th scope="row">{{ $user->id }}</th>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>Otto</td>
          <td>
            <a href="{{ route('users.edit', ['user' => $user->id ]) }}" class="btn btn-warning" data-bs-toggle="modal"
              data-bs-target="#exampleModal">Edit</a>
            <a class="btn btn-danger">Danger</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  @include('User.edit')
  @endsection
</x-app-layout>