<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $user->email }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $user->email }}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
            <label for="name">Nombre: </label>
            <input type="text" class="form-control" disabled value="{{ $user->name }}" name="">
          </div>
          <div class="col-12">
            <label for="name">DNI: </label>
            <input type="text" class="form-control" disabled value="{{ $user->dni }}" name="">
          </div>
          <div class="col-12">
            <label for="name">Email: </label>
            <input type="text" class="form-control" disabled value="{{ $user->email }}" name="">
          </div>
          <form action="{{ route('update.user', $user) }}" method="post">
            @csrf @method('patch')
            <div class="col-12">
              <label for="name">Tipo de usuario: </label>
              <input type="text" class="form-control" name="premium" value="{{ $user->premium }}" name="">
            </div>
            <button type="submit" class="btn btn-primary my-2">Editar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>