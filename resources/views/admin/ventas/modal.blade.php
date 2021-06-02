<div class="modal fade" id="ventaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Añadir Medicamento</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('detail.store')}}" method="POST">
                @csrf
                <p id="info_medic"></p>
                <input type="hidden" name="medicamento_id" id="medicamento_id">
                <input type="hidden" name="venta_id" id="venta_id" value="{{$id}}">
                <div class="form-group">
                    <label for="">Cantidad</label>
                    <input type="number" name="cantidad" id="cantidad" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Utilidad</label>
                    <input type="number" name="utilidad" id="utilidad" class="form-control">
                </div>
                <div class="d-grid gap-2 mt-2">
                    <input type="submit" value="Agregar" class="btn btn-primary">
                  </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
