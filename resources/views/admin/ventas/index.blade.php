@extends('layout.template')

@section('title', 'Ventas')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Ventas</h1>
            <div class="d-flex justify-content-between">
                <input type="text" id="input_1" class="d-inline form-control mb-3 w-75" placeholder="Buscar por código">
                <a href="{{route('ventas.create')}}" class="d-inline h-75 btn btn-primary btn-lg"><i class="align-middle" data-feather="plus"></i>Venta</a>
                <a href="#" id="prueba" class="d-inline h-75 btn btn-primary btn-lg"><i class="align-middle" data-feather="plus"></i>Prueba</a>
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

                                @foreach($ventas as $venta)
                                    <tr>
                                        <td>{{$venta->codigo}}</td>
                                        <td>{{$venta->cliente->name}}</td>
                                        <td>{{$venta->fecha}}</td>
                                        <td>{{$venta->utilidad}}</td>
                                        <td>
                                            <select>
                                                <option><a href="{{route('ventas.invoice')}}"><span class="badge bg-success">Cancelada Link</span></a></option>
                                                <option><span class="badge bg-danger">Anulada</span></option>
                                                <option><span class="badge bg-success">Cancelada</span></option>
                                                <option><span class="badge bg-warning">Observada</span></option>
                                            </select>
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
</main>
@endsection

@section('javascript')
    <script src="{{ asset('js/ventas/prueba.js') }}"></script>
@endsection

