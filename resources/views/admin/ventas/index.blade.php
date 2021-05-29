@extends('layout.template')

@section('title', 'Ventas')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Ventas</h1>
            <div class="d-flex justify-content-between">
                <input type="text" class="d-inline form-control mb-3 w-75" placeholder="Buscar por código">
                <a href="{{route('ventas.create')}}" class="d-inline h-75 btn btn-primary btn-lg"><i class="align-middle" data-feather="plus"></i>Venta</a>
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
                                    <th class="d-none d-xl-table-cell">Código</th>
                                    <th class="d-none d-xl-table-cell">Cliente</th>
                                    <th class="d-none d-xl-table-cell">Fecha</th>
                                    <th class="d-none d-md-table-cell">Utilidad</th>
                                    <th class="d-none d-md-table-cell">Factura</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="d-none d-xl-table-cell">201A</td>
                                    <td class="d-none d-xl-table-cell">Vanessa Tucker</td>
                                    <td class="d-none d-xl-table-cell">20/05/2021</td>
                                    <td class="d-none d-md-table-cell">200</td>
                                    <td class="d-none d-md-table-cell"><a href="{{route('ventas.invoice')}}"><span class="badge bg-success">Cancelada</span></a></td>

                                </tr>
                                <tr>

                                    <td class="d-none d-xl-table-cell">203A</td>
                                    <td class="d-none d-xl-table-cell">William Harris</td>
                                    <td class="d-none d-xl-table-cell">20/05/2021</td>
                                    <td class="d-none d-md-table-cell">205</td>
                                    <td class="d-none d-md-table-cell"><span class="badge bg-danger">Anulada</span></td>

                                </tr>
                                <tr>

                                    <td class="d-none d-xl-table-cell">204A</td>
                                    <td class="d-none d-xl-table-cell">Sharon Lessman</td>
                                    <td class="d-none d-xl-table-cell">20/05/2021</td>
                                    <td class="d-none d-md-table-cell">221</td>
                                    <td class="d-none d-md-table-cell"><span class="badge bg-success">Cancelada</span></td>

                                </tr>
                                <tr>

                                    <td class="d-none d-xl-table-cell">202B</td>
                                    <td class="d-none d-xl-table-cell">Vanessa Tucker</td>
                                    <td class="d-none d-xl-table-cell">20/05/2021</td>
                                    <td class="d-none d-md-table-cell">230</td>
                                    <td class="d-none d-md-table-cell"><span class="badge bg-warning">Observada</span</td>

                                </tr>
                                <tr>

                                    <td class="d-none d-xl-table-cell">203B</td>
                                    <td class="d-none d-xl-table-cell">William Harris</td>
                                    <td class="d-none d-xl-table-cell">20/05/2021</td>
                                    <td class="d-none d-md-table-cell">240</td>
                                    <td class="d-none d-md-table-cell"><span class="badge bg-success">Cancelada</span></td>

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
