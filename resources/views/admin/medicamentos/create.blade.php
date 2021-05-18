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
                                        <input type="text" class="form-control" id="inputUsername" placeholder="Nombre Genérico">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="inputUsername">Nombre Comercial</label>
                                        <input type="text" class="form-control" id="inputUsername" placeholder="Nombre Comercial">
                                    </div>
                                   
                                    
                                    <div class="mb-3">
                                        <label class="form-label" for="inputUsername">Presentación</label>
                                        <input type="text" class="form-control" id="inputUsername" placeholder="Presentación">
                                    </div>
                                
                                    
                                </div>

                                

                                <div class="col-md-4">
                                    <div class="text-center">
                                        <img alt="Charles Hall" src="{{asset('img/avatars/avatar.jpg')}}" class="rounded-circle img-responsive mt-2" width="128" height="128" />
                                        <div class="mt-2">
                                            <span class="btn btn-primary">Subir Imagen</span>
                                        </div>
                                        <small>Sube la imagen del producto</small>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8 mb-3">
                                        <label class="form-label" for="inputUsername">Laboratorio</label>
                                        <input type="text" class="form-control" id="inputUsername" placeholder="Laboratorio">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="inputUsername">Precio de Venta</label>
                                        <input type="number" class="form-control" id="inputUsername" placeholder="Precio de Venta">
                                    </div>
                                </div>

                               

                                <div class="row">
                                    <div class="col-sm-3 mb-3">
                                        <label class="form-label" for="inputUsername">Precio de Compra</label>
                                        <input type="number" class="form-control" id="inputUsername" placeholder="Precio de compra">
                                    </div>
                                    <div class="col-sm-3 mb-3">
                                        <label class="form-label" for="inputUsername">Porcentaje</label>
                                        <input type="number" class="form-control" id="inputUsername" placeholder="Porcentaje">
                                    </div>
                                    <div class="col-sm-3 mb-3">
                                        <label class="form-label" for="inputUsername">Precio de Caja</label>
                                        <input type="number" class="form-control" id="inputUsername" placeholder="Precio de caja">
                                    </div>
                                    <div class="col-sm-3 mb-3">
                                        <label class="form-label" for="inputUsername">Precio unitario</label>
                                        <input type="number" class="form-control" id="inputUsername" placeholder="Precio unitario">
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
