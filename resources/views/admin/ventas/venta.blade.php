@extends('layout.template')

@section('title', 'Cesta de Productos')

@section('content')
<main class="content">
    <div class="container-fluid p-0">


            <h1 class="h3 mb-3">Buscar Cliente</h1>
            <div class="d-flex justify-content-between">
                <input type="text" class="d-inline form-control mb-3 w-75" placeholder="Ingrese el DNI del cliente">
                <a href="" class="d-inline h-75 btn btn-primary btn-lg"><i class="align-middle" data-feather="search"></i> Buscar Cliente</a>
            </div>
            <h1 class="h3 mb-3">Ventas</h1>
            <div class="d-flex justify-content-between">
                <input type="text" class="d-inline form-control mb-3 w-100" placeholder="Buscar producto">

            </div>


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Cesta de Productos</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Cliente:</strong>Jhon Doe</p>
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>Nombre Comercial</th>
                                    <th class="d-none d-xl-table-cell">Nombre Genérico</th>
                                    <th class="d-none d-xl-table-cell">Fecha de Vencimiento</th>
                                    <th class="d-none d-xl-table-cell">Cantidad</th>
                                    <th class="d-none d-xl-table-cell">Precio</th>
                                    <th class="d-none d-md-table-cell">Operaciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="d-none d-xl-table-cell">Abrilar</td>
                                    <td class="d-none d-xl-table-cell">Abrilar</td>
                                    <td class="d-none d-xl-table-cell">31/06/2021</td>
                                    <td>3</td>
                                    <td>S./5.00</td>
                                    <td class="d-none d-md-table-cell"><i class="align-middle" data-feather="edit-2"></i><i class="align-middle" data-feather="trash"></i></td>
                                </tr>
                                <tr>
                                    <td class="d-none d-xl-table-cell">Acido acetil salicilico</td>
                                    <td class="d-none d-xl-table-cell">Aspirina</td>
                                    <td class="d-none d-xl-table-cell">31/06/2021</td>
                                    <td>4</td>
                                    <td>S./5.00</td>
                                    <td class="d-none d-md-table-cell"><i class="align-middle" data-feather="edit-2"></i><i class="align-middle" data-feather="trash"></i></td>
                                </tr>
                                <tr>
                                    <td class="d-none d-xl-table-cell">Acido valproico</td>
                                    <td class="d-none d-xl-table-cell">Valcote ER</td>
                                    <td class="d-none d-xl-table-cell">31/06/2021</td>
                                    <td>3</td>
                                    <td>S./5.00</td>
                                    <td class="d-none d-md-table-cell"><i class="align-middle" data-feather="edit-2"></i><i class="align-middle" data-feather="trash"></i></td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="text-center mt-3">
                            <p>TOTAL S./50</p>
                            <a href="{{route('ventas.invoice')}}" class="btn btn-primary mt-3">Finalizar Venta</a>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
