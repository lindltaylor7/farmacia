@extends('layout.template')

@section('title', 'Ventas')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Ventas</h1>
            <div class="d-flex justify-content-between">
                <input type="text" id="input_1" class="d-inline form-control mb-3 w-75" placeholder="Buscar por código">
                <a href="#" data-bs-toggle="modal" data-bs-target="#clientModal" class="d-inline h-75 btn btn-primary btn-lg"><i class="align-middle" data-feather="plus"></i>Venta</a>
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
                                        <td>{{$venta->id}}</td>
                                        <td>{{$venta->cliente->name}}</td>
                                        <td>{{$venta->fecha}}</td>
                                        <td>{{$venta->utilidad}}</td>

                                            @if($venta->id%2==0)
                                                <td><a href="{{route('ventas.show', $venta->id)}}"><span class="badge bg-warning">Cancelada Link</span></a></td>
                                            @elseif($venta->id%3==0)
                                                <td><span class="badge bg-danger">Anulada</span></td>
                                            @else
                                                <td><span class="badge bg-success">Cancelada</span></td>
                                            @endif

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
    <script src="{{ asset('js/ventas/prueba.js') }}"></script>
@endsection

