@extends('layout.template')

@section('title', 'Inicio')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Medicamentos</h1>
            <div class="d-flex justify-content-between">
                <input type="text" class="d-inline form-control mb-3 w-75" placeholder="Buscar">
                <a href="{{route('admin.create')}}" class="d-inline h-75 btn btn-primary btn-lg"><i class="align-middle" data-feather="plus"></i>Agregar Medicamento</a>
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
                                <tr>
                                    <td>Project Nitro</td>
                                    <td class="d-none d-xl-table-cell">01/01/2021</td>
                                    <td class="d-none d-xl-table-cell">31/06/2021</td>
                                    <td><span class="badge bg-warning">In progress</span></td>
                                    <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                                </tr>
                                <tr>
                                    <td>Project Phoenix</td>
                                    <td class="d-none d-xl-table-cell">01/01/2021</td>
                                    <td class="d-none d-xl-table-cell">31/06/2021</td>
                                    <td><span class="badge bg-success">Done</span></td>
                                    <td class="d-none d-md-table-cell">William Harris</td>
                                </tr>
                                <tr>
                                    <td>Project X</td>
                                    <td class="d-none d-xl-table-cell">01/01/2021</td>
                                    <td class="d-none d-xl-table-cell">31/06/2021</td>
                                    <td><span class="badge bg-success">Done</span></td>
                                    <td class="d-none d-md-table-cell">Sharon Lessman</td>
                                </tr>
                                <tr>
                                    <td>Project Romeo</td>
                                    <td class="d-none d-xl-table-cell">01/01/2021</td>
                                    <td class="d-none d-xl-table-cell">31/06/2021</td>
                                    <td><span class="badge bg-success">Done</span></td>
                                    <td class="d-none d-md-table-cell">Christina Mason</td>
                                </tr>
                                <tr>
                                    <td>Project Wombat</td>
                                    <td class="d-none d-xl-table-cell">01/01/2021</td>
                                    <td class="d-none d-xl-table-cell">31/06/2021</td>
                                    <td><span class="badge bg-warning">In progress</span></td>
                                    <td class="d-none d-md-table-cell">William Harris</td>
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
