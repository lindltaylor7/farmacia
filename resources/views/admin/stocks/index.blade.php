@extends('layout.template')

@section('title', 'Stocks')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Stock</h1>
            <div class="d-flex justify-content-between">
                <input type="text" class="d-inline form-control mb-3 w-75" id="search_stock" placeholder="Buscar">
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
                                    <th class="d-none d-md-table-cell">Medicamento</th>
                                    <th class="d-none d-md-table-cell">Cantidad</th>
                                    <th class="d-none d-md-table-cell">Fecha de Ingreso</th>
                                    <th class="d-none d-md-table-cell">Fecha de Vencimiento</th>
                                    <th class="d-none d-md-table-cell">Opciones</th>
                                </tr>
                            </thead>
                            <tbody id="dynamic-row">
                                @foreach($stocks as $stock)
                                    <tr id="row{{$stock->id}}">
                                        <td>{{$stock->medicamento->n_generico}}</td>
                                        <td>{{$stock->cantidad}}</td>
<<<<<<< HEAD
                                        <td>{{$stock->medicamento->anaquel}}</td>
=======
>>>>>>> 437118568ea6be3beca6bd6c70bbb4c7d477ac0f
                                        <td>{{date('d/m/Y', strtotime($stock->f_ingreso))}}</td>
                                        <td>{{date('d/m/Y', strtotime($stock->f_vencimiento))}}</td>
                                        <td>
                                            <a href="#" class="btn-editar" id="{{ $stock->id }}" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="align-middle" data-feather="edit-2"></i></a>
                                            <a href="#" class="btn-eliminar" id="{{ $stock->id }}"><i class="align-middle" data-feather="trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.stocks.modal')
</main>
@endsection

@section('javascript')
    <script src="{{ asset('js/stocks/stocks_search.js') }}"></script>
    <script src="{{ asset('js/stocks/stocks_delete.js') }}"></script>
    <script src="{{ asset('js/stocks/stocks_update.js') }}"></script>
@endsection
