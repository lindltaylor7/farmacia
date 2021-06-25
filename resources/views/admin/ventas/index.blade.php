@extends('layout.template')

@section('title', 'Ventas')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Ventas</h1>
            <div class="d-flex justify-content-between">
                {{-- <input type="text" id="input_1" class="d-inline form-control mb-3 w-75" placeholder="Buscar por código"> --}}

            </div>


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#clientModal" class="d-inline h-75 btn btn-primary btn-lg"><i class="align-middle" data-feather="plus"></i>Venta</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th class="d-none d-xl-table-cell">Código</th>
                                    <th class="d-none d-xl-table-cell">Cliente</th>
                                    <th class="d-none d-xl-table-cell">Fecha</th>
                                    <th class="d-none d-md-table-cell">Utilidad</th>
                                    <th class="d-none d-md-table-cell">Boleta</th>
                                    <th class="d-none d-md-table-cell">Ticket</th>
                                    <th class="d-none d-md-table-cell">Detalle</th>
                                    @can('nullSell')
                                    <th class="d-none d-md-table-cell">Opciones</th>
                                    @endcan

                                </tr>
                            </thead>
                            <tbody>

                                @foreach($ventas as $venta)
                                    <tr>
                                        <td>{{$venta->id}}</td>
                                        <td>{{$venta->cliente->name}}</td>
                                        <td>{{date('d/m/Y', strtotime($venta->fecha))}}</td>



                                        <td>S./{{$venta->utilidad}}</td>
                                        <td>
                                            @if ($venta->status == 1)
                                                <a target="_blank" href="{{route('generarpdf.reporte', $venta->id)}}"><span class="badge bg-success">Emitida</span></a>
                                            @else
                                                <a target="_blank" href="{{route('generarpdf.reporte', $venta->id)}}"><span class="badge bg-danger">Anulada</span></a>
                                            @endif
                                        </td>
                                        <td>
                                            <a target="_blank" href="{{route('generar_pdfticket.ventas', $venta->id)}}">Ver Ticket</a>
                                        </td>
                                        <td><a href="{{route('ventas.show', $venta->id)}}">Ver más</a></td>

                                        @can('nullSell')
                                        <td><a href=""class="btn btn-danger">Anular</a></td>
                                        @endcan

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.ventas.clientmodal')
</main>
@endsection

@section('javascript')
    <script src="{{asset('js/ventas/reniec_dni.js')}}"></script>
@endsection

