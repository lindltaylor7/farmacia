@extends('layout.template')

@section('title', 'Agregar Stock')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Agregar Stock</h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Ingrese los datos del Stock</h5>
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
                                        <label class="form-label" for="inputUsername">Medicamento</label>
                                        <select class="form-control" id="inputUsername" name="medicamento" size="2" multiple>

                                            <option>Ibuprofeno</option>
                                            
                                            <option>Amoxicilina</option>
                                            
                                            <option>Aspirina</option>
                                            
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="inputUsername">Cantidad</label>
                                        <input type="number" class="form-control" id="inputUsername" placeholder="Cantidad">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="inputUsername">Fecha De Ingreso</label>
                                        <input type="date" class="form-control" id="inputUsername" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="inputUsername">Fecha De Vencimiento</label>
                                        <input type="date" class="form-control" id="inputUsername" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Descripción</label>
                                        <textarea rows="2" class="form-control" id="inputBio" placeholder="Descripción del medicamento"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center">
                                        <img alt="Charles Hall" src="{{asset('img/avatars/avatar.jpg')}}" class="rounded-circle img-responsive mt-2" width="128" height="128" />
                                        <div class="mt-2">
                                            <span class="btn btn-primary">Subir</span>
                                        </div>
                                        <small>For best results, use an image at least 128px by 128px in .jpg format</small>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection