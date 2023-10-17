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
          <div class="col-12">
            <label for="name">Tipo de Usuario: </label>
            <input type="text" class="form-control" disabled value="{{ $user->tipoDeUsuario }}" name="">
          </div>
          <form action="{{ route('update.user', $user) }}" method="post">
            @csrf @method('patch')
            <div class="col-12">
              <label for="name">Tipo de Cuenta: </label>
              <select name="premium" id="" class="form-control">
                @if($user->premium == "Simple")
                <option value="{{ $user->premium }}" selected>{{ $user->premium }}</option>
                <option value="Premium">Premium</option>
                @else
                <option value="{{ $user->premium }}" selected>{{ $user->premium }}</option>
                <option value="Simple">Simple</option>
                @endif
              </select>
            </div>
            <button type="submit" class="btn btn-primary my-2">Editar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>