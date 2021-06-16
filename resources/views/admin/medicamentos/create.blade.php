@extends('layout.template')

@section('title', 'Agregar Medicamento')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Agregar Medicamento</h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Ingrese los datos del medicamento</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('medicamentos.store')}}" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label class="form-label" for="inputUsername">Nombre Genérico</label>
                                        <input type="text" name="n_generico" class="form-control" id="inputUsername" placeholder="Nombre Genérico">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="inputUsername">Nombre Comercial</label>
                                        <input type="text" name="n_comercial" class="form-control" id="inputUsername" placeholder="Nombre Comercial">
                                    </div>


                                    <div class="mb-3">
                                        <label class="form-label" for="inputUsername">Presentación</label>
                                        <input type="text" name="present" class="form-control" id="inputUsername" placeholder="Presentación">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="inputUsername">Concentración</label>
                                        <input type="text" name="concent" class="form-control" id="inputUsername" placeholder="Concentración">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="inputUsername">Número por Caja</label>
                                        <input type="number" name="nro_caja" class="form-control" id="inputUsername" placeholder="Número por caja">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="inputUsername">Laboratorio</label>
                                        <input type="text" name="lab" class="form-control" id="inputUsername" placeholder="Laboratorio">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="inputUsername">Anaquel</label>
                                        <input type="text" name="anaquel" class="form-control" id="inputUsername" placeholder="Anaquel">
                                    </div>

                                </div>



                                <div class="col-md-4">
                                    <div class="text-center">
                                        <img alt="Charles Hall" src="{{asset('img/medic2.jpg')}}" id="picture" class="rounded-circle img-responsive mt-2" width="128" height="128" />
                                        <div class="mt-2">
                                            <label for="foto">
                                                <span class="btn btn-primary" aria-hidden="true">Subir Imagen</span>
                                                <input type="file" name="foto" accept="image/*" id="foto" style="display:none">
                                            </label>
                                        </div>
                                        <small>Suba la imagen del medicamento (Opcional)</small>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label" for="p_costo">Precio de Costo Unitario</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">S./</span>
                                              </div>
                                            <input type="number" name="p_costo" class="form-control" id="p_costo" placeholder="Precio unitario">
                                        </div>
                                      </div>

                                    <div class="col-sm-3 mb-3">
                                        <label class="form-label" for="utilidad">Porcentaje de Utilidad</label>
                                        <div class="input-group">
                                            <input type="number" name="utilidad" class="form-control" id="utilidad" placeholder="Utilidad">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label class="form-label" for="p_unitario">Precio de Venta Unitario</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">S./</span>
                                            </div>
                                              <input type="number" name="p_unitario" class="form-control" id="p_unitario" placeholder="Precio de Venta" readonly>
                                        </div>
                                    </div>

                                </div>



                                <div class="row">

                                      <div class="col-md-3 mb-3">
                                        <label class="form-label" for="p_caja">Precio de Costo por Caja</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">S./</span>
                                              </div>
                                              <input type="number" name="p_caja" class="form-control" id="p_caja" placeholder="Precio por caja">

                                        </div>
                                      </div>

                                      <div class="col-sm-3 mb-3">
                                        <label class="form-label" for="utilidad_caja">Porcentaje de Utilidad por Caja</label>
                                        <div class="input-group">

                                            <input type="number" name="utilidad_caja" class="form-control" id="utilidad_caja" placeholder="Utilidad por caja">



                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">%</span>
                                            </div>
                                        </div>
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label class="form-label" for="p_venta_caja">Precio de Venta por Caja</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">S./</span>
                                            </div>
                                              <input type="number" name="p_venta_caja" class="form-control" id="p_venta_caja" placeholder="Precio de Venta caja" readonly>
                                        </div>
                                      </div>
                                </div>

                            </div>
                            <br>
                            <a class="btn btn-info" href="{{route('medicamentos.index')}}">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection

@section('javascript')
    <script src="{{ asset('js/medicamentos/math_precios.js') }}"></script>
    <script src="{{ asset('js/medicamentos/img_create.js') }}"></script>
@endsection
