@extends('layout.template')

@section('title', 'Cesta de Productos')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Ventas</h1>
            <div class="d-flex justify-content-between">
                <input type="text" class="d-inline form-control mb-3 w-75" placeholder="Buscar">
                <a href="{{route('admin.create')}}" class="d-inline h-75 btn btn-primary btn-lg"><i class="align-middle" data-feather="plus"></i>Añadir</a>
            </div>


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Cesta de Productos</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>Nombre Comercial</th>
                                    <th class="d-none d-xl-table-cell">Fecha de Vencimiento</th>
                                    <th class="d-none d-xl-table-cell">Fecha de Caducidad</th>
                                    <th>Stock</th>
                                    <th class="d-none d-md-table-cell">Operaciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Project Apollo</td>
                                    <td class="d-none d-xl-table-cell">01/01/2021</td>
                                    <td class="d-none d-xl-table-cell">31/06/2021</td>
                                    <td><span class="badge bg-success">Done</span></td>
                                    <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                                </tr>
                                <tr>
                                    <td>Project Fireball</td>
                                    <td class="d-none d-xl-table-cell">01/01/2021</td>
                                    <td class="d-none d-xl-table-cell">31/06/2021</td>
                                    <td><span class="badge bg-danger">Cancelled</span></td>
                                    <td class="d-none d-md-table-cell">William Harris</td>
                                </tr>
                                <tr>
                                    <td>Project Hades</td>
                                    <td class="d-none d-xl-table-cell">01/01/2021</td>
                                    <td class="d-none d-xl-table-cell">31/06/2021</td>
                                    <td><span class="badge bg-success">Done</span></td>
                                    <td class="d-none d-md-table-cell">Sharon Lessman</td>
                                </tr>

                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary mt-3">Finalizar Venta</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
