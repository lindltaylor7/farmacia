@extends('layout.template')

@section('title', 'Ventas')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Ventas</h1>
            <div class="d-flex justify-content-between">
                <input type="text" class="d-inline form-control mb-3 w-75" placeholder="Buscar">
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
                                    <th>ID</th>
                                    <th class="d-none d-xl-table-cell">CÓDIGO</th>
                                    <th class="d-none d-xl-table-cell">CLIENTE</th>
                                    <th>FECHA</th>
                                    <th class="d-none d-md-table-cell">UTILIDAD</th>
                                    <th class="d-none d-md-table-cell">ID_MEDICAMENTO</th>
                                    <th class="d-none d-md-table-cell">CANTIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="d-none d-xl-table-cell">201A</td>
                                    <td class="d-none d-xl-table-cell">Vanessa Tucker</td>
                                    <td><a href="{{route('ventas.invoice')}}"><span class="badge bg-success">PDF</span></a></td>
                                    <td class="d-none d-md-table-cell">200</td>
                                    <td class="d-none d-md-table-cell">6</td>
                                    <td class="d-none d-md-table-cell">7</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="d-none d-xl-table-cell">203A</td>
                                    <td class="d-none d-xl-table-cell">William Harris</td>
                                    <td><span class="badge bg-danger">20/05/2021</span></td>
                                    <td class="d-none d-md-table-cell">205</td>
                                    <td class="d-none d-md-table-cell">7</td>
                                    <td class="d-none d-md-table-cell"> 7</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="d-none d-xl-table-cell">204A</td>
                                    <td class="d-none d-xl-table-cell">Sharon Lessman</td>
                                    <td><span class="badge bg-success">20/05/2021</span></td>
                                    <td class="d-none d-md-table-cell">221</td>
                                    <td class="d-none d-md-table-cell">8</td>
                                    <td class="d-none d-md-table-cell">7</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="d-none d-xl-table-cell">202B</td>
                                    <td class="d-none d-xl-table-cell">Vanessa Tucker</td>
                                    <td><span class="badge bg-warning">20/05/2021</span></td>
                                    <td class="d-none d-md-table-cell">230</td>
                                    <td class="d-none d-md-table-cell">9</td>
                                    <td class="d-none d-md-table-cell">7</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="d-none d-xl-table-cell">203B</td>
                                    <td class="d-none d-xl-table-cell">William Harris</td>
                                    <td><span class="badge bg-success">20/05/2021</span></td>
                                    <td class="d-none d-md-table-cell">240</td>
                                    <td class="d-none d-md-table-cell">10</td>
                                    <td class="d-none d-md-table-cell">7</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="d-none d-xl-table-cell">202C</td>
                                    <td class="d-none d-xl-table-cell">Sharon Lessman</td>
                                    <td><span class="badge bg-success">20/05/2021</span></td>
                                    <td class="d-none d-md-table-cell">300</td>
                                    <td class="d-none d-md-table-cell">11</td>
                                    <td class="d-none d-md-table-cell">7</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="d-none d-xl-table-cell">203C</td>
                                    <td class="d-none d-xl-table-cell">Christina Mason</td>
                                    <td><span class="badge bg-success">20/05/2021</span></td>
                                    <td class="d-none d-md-table-cell">303</td>
                                    <td class="d-none d-md-table-cell">12</td>
                                    <td class="d-none d-md-table-cell">8</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="d-none d-xl-table-cell">204D</td>
                                    <td class="d-none d-xl-table-cell">William Harris</td>
                                    <td><span class="badge bg-warning">20/05/2021</span></td>
                                    <td class="d-none d-md-table-cell">505</td>
                                    <td class="d-none d-md-table-cell">13</td>
                                    <td class="d-none d-md-table-cell">8</td>
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
