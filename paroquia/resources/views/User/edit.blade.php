
<form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST" enctype="multipart/form-data">

@csrf
  @method('PUT')

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="row align-items-start">
            <div class="col">
              <label for="validationCustom01" class="form-label">Nome</label>
              <input type="text" class="form-control" id="validationCustom01" name="name" value="{{ $user->name }}">
            </div>
            <div class="col">
              <label for="validationCustom02" class="form-label">E-mail</label>
              <input type="email" class="form-control" id="validationCustom02" name="email" value="{{ $user->email }}">
            </div>
            <div class="col">
              <label for="validationCustom04" class="form-label">Nível de Acesso</label>
              <select class="form-select" id="validationCustom04" name="role" required>
                <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>Usuário</option>
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</a>
          <button type="submit" class="btn btn-primary">Salvar alterações</button>
        </div>
      </div>
    </div>
</div>
</form>
