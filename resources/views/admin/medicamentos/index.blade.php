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
                                    <th class="d-none d-xl-table-cell">Nombre Genérico</th>
                                    <th class="d-none d-xl-table-cell">Nombre Comercial</th>
                                    <th class="d-none d-xl-table-cell">Presentación</th>
                                    <th class="d-none d-xl-table-cell">Concentración</th>
                                    <th class="d-none d-md-table-cell">Precio</th>
                                    <th class="d-none d-md-table-cell">Cantidad</th>
                                    <th class="d-none d-md-table-cell">Laboratorio</th>
                                    <th class="d-none d-md-table-cell">Anaquel</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="d-none d-xl-table-cell">Abrilar</td>
                                    <td class="d-none d-xl-table-cell">Abrilar</td>
                                    <td class="d-none d-xl-table-cell">Jarabe</td>
                                    <td class="d-none d-xl-table-cell">35mg/5ml</td>
                                    <td class="d-none d-md-table-cell">S./5.00</td>
                                    <td class="d-none d-md-table-cell">20</td>
                                    <td class="d-none d-md-table-cell">Bayern</td>
                                    <td class="d-none d-md-table-cell">1</td>
                                </tr>
                                <tr>
                                    <td class="d-none d-xl-table-cell">Acido acetil salicilico</td>
                                    <td class="d-none d-xl-table-cell">Aspirina</td>
                                    <td class="d-none d-xl-table-cell">Tableta</td>
                                    <td class="d-none d-xl-table-cell">500mg</td>
                                    <td class="d-none d-md-table-cell">S./2.00</td>
                                    <td class="d-none d-md-table-cell">30</td>
                                    <td class="d-none d-md-table-cell">Bayern</td>
                                    <td class="d-none d-md-table-cell">2</td>
                                </tr>
                                <tr>
                                    <td class="d-none d-xl-table-cell">Acido valproico</td>
                                    <td class="d-none d-xl-table-cell">Valcote ER</td>
                                    <td class="d-none d-xl-table-cell">Tableta</td>
                                    <td class="d-none d-xl-table-cell">500mg</td>
                                    <td class="d-none d-md-table-cell">S./5.00</td>
                                    <td class="d-none d-md-table-cell">30</td>
                                    <td class="d-none d-md-table-cell">Bayern</td>
                                    <td class="d-none d-md-table-cell">2</td>
                                </tr>
                                <tr>
                                    <td class="d-none d-xl-table-cell">Acido valproico</td>
                                    <td class="d-none d-xl-table-cell">Valcote ER</td>
                                    <td class="d-none d-xl-table-cell">Tableta</td>
                                    <td class="d-none d-xl-table-cell">200mg</td>
                                    <td class="d-none d-md-table-cell">S./5.00</td>
                                    <td class="d-none d-md-table-cell">30</td>
                                    <td class="d-none d-md-table-cell">Bayern</td>
                                    <td class="d-none d-md-table-cell">2</td>
                                </tr>
                                <tr>
                                    <td class="d-none d-xl-table-cell">Albendazol</td>
                                    <td class="d-none d-xl-table-cell">-</td>
                                    <td class="d-none d-xl-table-cell">Tableta Masticable</td>
                                    <td class="d-none d-xl-table-cell">-</td>
                                    <td class="d-none d-md-table-cell">S./2.00</td>
                                    <td class="d-none d-md-table-cell">30</td>
                                    <td class="d-none d-md-table-cell">Bayern</td>
                                    <td class="d-none d-md-table-cell">2</td>
                                </tr>
                                <tr>
                                    <td class="d-none d-xl-table-cell">Alprazolam</td>
                                    <td class="d-none d-xl-table-cell">Alpaz</td>
                                    <td class="d-none d-xl-table-cell">Tableta</td>
                                    <td class="d-none d-xl-table-cell">0.5mg</td>
                                    <td class="d-none d-md-table-cell">S./2.00</td>
                                    <td class="d-none d-md-table-cell">30</td>
                                    <td class="d-none d-md-table-cell">Bayern</td>
                                    <td class="d-none d-md-table-cell">2</td>
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
