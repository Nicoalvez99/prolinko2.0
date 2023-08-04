<!-- Modal -->
<form action="" method="post">
  @csrf
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Cobrar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p style="font-size: 30px; color: green;">Total: $0.00</p>
          <label for="vuelto">¿Con cuánto paga?</label>
          <input type="number" name="vuelto" class="form-control">
          <button type="button" class="btn btn-primary mt-2">Vuelto</button>
        </div>
      </div>
    </div>
  </div>
</form>