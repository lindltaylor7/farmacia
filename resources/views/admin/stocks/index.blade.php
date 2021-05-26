@extends('layout.template')

@section('title', 'Stocks')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Stock</h1>
            <div class="d-flex justify-content-between">
                <input type="text" class="d-inline form-control mb-3 w-75" placeholder="Buscar">
                <a href="{{route('stock.create')}}" class="d-inline h-75 btn btn-primary btn-lg"><i class="align-middle" data-feather="plus"></i>Agregar Stock</a>
            </div>


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                    
                                    <th>Medicamento</th>
                                    <th class="d-none d-xl-table-cell">Cantidad</th>
                                    <th class="d-none d-xl-table-cell">Anaquel</th>
                                    <th class="d-none d-xl-table-cell">Fecha de Ingreso</th>
                                    <th class="d-none d-md-table-cell">Fecha de Vencimiento</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($stocks as $stock)
                                    <tr>
                                        <td>{{$stock->medicamento->n_generico}}</td>
                                        <td>{{$stock->cantidad}}</td>
                                        <td>{{$stock->anaquel}}</td>
                                        <td>{{$stock->f_ingreso}}</td>
                                        <td>{{$stock->f_vencimiento}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
