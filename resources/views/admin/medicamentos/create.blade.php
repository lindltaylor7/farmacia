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
                        <form>
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


                                </div>



                                <div class="col-md-4">
                                    <div class="text-center">
                                        <img alt="Charles Hall" src="{{asset('img/medic2.jpg')}}" class="rounded-circle img-responsive mt-2" width="128" height="128" />
                                        <div class="mt-2">
                                            <label for="img">
                                                <span class="btn btn-primary" aria-hidden="true">Subir Imagen</span>
                                                <input type="file" name="img" accept="image/*" id="img" style="display:none">
                                            </label>
                                        </div>
                                        <small>Suba la imagen del medicamento (Opcional)</small>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8 mb-3">
                                        <label class="form-label" for="inputUsername">Laboratorio</label>
                                        <input type="text" name="lab" class="form-control" id="inputUsername" placeholder="Laboratorio">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="inputUsername">Precio de Costo Unitario</label>
                                        <input type="number" name="p_costo" class="form-control" id="inputUsername" placeholder="Precio de Venta">
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-sm-3 mb-3">
                                        <label class="form-label" for="inputUsername">Porcentaje de Utilidad</label>
                                        <input type="number" name="utilidad" class="form-control" id="inputUsername" placeholder="Porcentaje">
                                    </div>
                                    <div class="col-sm-3 mb-3">
                                        <label class="form-label" for="inputUsername">Precio de Venta Unitario</label>
                                        <input type="number" name="p_costo" class="form-control" id="inputUsername" placeholder="Precio de compra">
                                    </div>
                                    <div class="col-sm-3 mb-3">
                                        <label class="form-label" for="inputUsername">Precio de Venta por Caja</label>
                                        <input type="number" name="p_venta_caja" class="form-control" id="inputUsername" placeholder="Precio de venta por caja">
                                    </div>
                                    <div class="col-sm-3 mb-3">
                                        <label class="form-label" for="inputUsername">Precio de Costo por Caja</label>
                                        <input type="number" name="p_caja" class="form-control" id="inputUsername" placeholder="Precio de costo por caja">
                                    </div>
                                </div>

                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
