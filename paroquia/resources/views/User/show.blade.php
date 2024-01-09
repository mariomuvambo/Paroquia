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
        @foreach($users as $user)
        <tr>
          <th scope="row">{{ $user->id }}</th>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>Otto</td>
          <td>
            <a href="{{ route('users.edit', ['user'=> $user->id])  }} " class="btn btn-warning">Edit</a>
            
            <form id="form_delete" action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger delete-btn">Delete</button>
            </form>

          </td>

        </tr>

        @endforeach

      </tbody>
    </table>
  </div>


  @endsection
</x-app-layout>