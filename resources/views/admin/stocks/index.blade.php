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
                                    <th>Id</th>
                                    <th>Medicamento</th>
                                    <th class="d-none d-xl-table-cell">Cantidad</th>
                                    <th class="d-none d-xl-table-cell">Anaquel</th>
                                    <th class="d-none d-xl-table-cell">Fecha de Ingreso</th>
                                    <th class="d-none d-md-table-cell">Fecha de Vencimiento</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ibuprofeno</td>  
                                    <td class="d-none d-xl-table-cell">20</td>
                                    <td class="d-none d-xl-table-cell">Uno</td>
                                    <td><span class="badge bg-success">01/01/2021</span></td>
                                    <td class="d-none d-md-table-cell">04/03/2023</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Ibuprofeno</td> 
                                    <td class="d-none d-xl-table-cell">32</td>
                                    <td class="d-none d-xl-table-cell">Uno</td>
                                    <td><span class="badge bg-danger">01/01/2021</span></td>
                                    <td class="d-none d-md-table-cell">04/03/2023</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Ibuprofeno</td> 
                                    <td class="d-none d-xl-table-cell">31</td>
                                    <td class="d-none d-xl-table-cell">Dos</td>
                                    <td><span class="badge bg-success">01/01/2021</span></td>
                                    <td class="d-none d-md-table-cell">04/03/2023</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Amoxicilina</td> 
                                    <td class="d-none d-xl-table-cell">25</td>
                                    <td class="d-none d-xl-table-cell">Uno</td>
                                    <td><span class="badge bg-warning">01/01/2021</span></td>
                                    <td class="d-none d-md-table-cell">04/03/2023</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Amoxicilina</td>
                                    <td class="d-none d-xl-table-cell">26</td>
                                    <td class="d-none d-xl-table-cell">Dos</td>
                                    <td><span class="badge bg-success">01/01/2021</span></td>
                                    <td class="d-none d-md-table-cell">04/03/2023</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Ibuprofeno</td>
                                    <td class="d-none d-xl-table-cell">22</td>
                                    <td class="d-none d-xl-table-cell">Dos</td>
                                    <td><span class="badge bg-success">01/01/2021</span></td>
                                    <td class="d-none d-md-table-cell">04/03/2023</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Vitamina A</td>
                                    <td class="d-none d-xl-table-cell">24</td>
                                    <td class="d-none d-xl-table-cell">Dos</td>
                                    <td><span class="badge bg-success">01/01/2021</span></td>
                                    <td class="d-none d-md-table-cell">04/03/2023</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Vitamina B</td>
                                    <td class="d-none d-xl-table-cell">25</td>
                                    <td class="d-none d-xl-table-cell">Dos</td>
                                    <td><span class="badge bg-warning">01/01/2021</span></td>
                                    <td class="d-none d-md-table-cell">04/03/2023</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
