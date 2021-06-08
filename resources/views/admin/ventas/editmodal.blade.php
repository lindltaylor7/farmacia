<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Detalle</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('detail.update')}}" method="POST">
                @csrf
                <p id="info_medic"></p>
                <input type="hidden" name="detail_id" id="detail_id">
                <div class="form-group">
                    <label for="">Cantidad</label>
                    <input type="number" name="cantidad" id="cantidad_edit" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Precio</label>
                    <input type="number" name="price" id="price_edit" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="">Costo</label>
                    <input type="number" step="any" name="utilidad" id="utilidad_edit" class="form-control">
                </div>
                <div class="d-grid gap-2 mt-2">
                    <input type="submit" value="Editar" class="btn btn-primary">
                  </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
