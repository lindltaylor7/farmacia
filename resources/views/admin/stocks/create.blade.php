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
                        <form method="POST" action="{{route('stock.store')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                   
                                    <div class="mb-3">
                                        <label class="form-label" for="inputUsername">Medicamento</label>
                                        <select class="form-control" id="inputUsername" name="medicamento_id">

                                            @foreach($medicamentos as $medicamento)
                                                <option value="{{$medicamento->id}}">
                                                    {{$medicamento->n_generico}}
                                                </option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="inputUsername">Cantidad</label>
                                        <input type="number" name="cantidad" class="form-control" id="inputUsername" placeholder="Cantidad">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="inputUsername">Anaquel</label>
                                        <input type="text" name="anaquel" class="form-control" id="inputUsername" placeholder="Anaquel">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="inputUsername">Fecha De Ingreso</label>
                                        <input type="date" name="f_ingreso" class="form-control" id="inputUsername" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="inputUsername">Fecha De Vencimiento</label>
                                        <input type="date" name="f_vencimiento" class="form-control" id="inputUsername" placeholder="">
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