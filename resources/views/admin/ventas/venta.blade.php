@extends('layout.template')

@section('title', 'Cesta de Productos')

@section('content')
<main class="content">
    <div class="container-fluid p-0">


            <h1 class="h3 mb-3">Buscar Cliente</h1>
            <div class="d-flex justify-content-between">
                <input type="text" class="d-inline form-control mb-3 w-75" id="search_dni" placeholder="Ingrese el DNI del cliente">

                <a id="btn_dni" class="d-inline h-75 btn btn-primary btn-lg"><i class="align-middle" data-feather="search"></i> Buscar Cliente</a>
            </div>
            <h1 class="h3 mb-3">Ventas</h1>
            <div id="container-search" class="d-flex flex-column justify-content-between">
                <input type="text" class="d-inline form-control w-100" id="search" placeholder="Buscar producto">
                <table class="table table-hover table-sm">
                    <tbody class="border border-primary" id="medicamentos_select">
                    </tbody>
                </table>
            </div>


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Cesta de Productos {{$id}}</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Cliente:</strong><p id="nombre_cliente"></p></p>
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th class="d-none d-xl-table-cell">Nombre Genérico</th>
                                    <th class="d-none d-xl-table-cell">Nombre Comercial</th>
                                    <th class="d-none d-xl-table-cell">Fecha de Vencimiento</th>
                                    <th class="d-none d-xl-table-cell">Cantidad</th>
                                    <th class="d-none d-xl-table-cell">Precio</th>
                                    <th class="d-none d-md-table-cell">Operaciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $sum=0;
                                @endphp
                                @foreach ($details as $detail)
                                <tr>
                                    <td class="d-none d-xl-table-cell">{{$detail->medicamento->n_generico}}</td>
                                    <td class="d-none d-xl-table-cell">{{$detail->medicamento->n_comercial}}</td>
                                    <td class="d-none d-xl-table-cell">
                                        @foreach ($detail->medicamento->stock as $stock)
                                        {{date('d/m/Y', strtotime($stock->f_vencimiento))}}
                                        @endforeach
                                    </td>
                                    <td>{{$detail->cantidad}}</td>
                                    <td>S./{{$detail->medicamento->precio->p_unitario}}</td>
                                    @php
                                    $prod = $detail->cantidad*$detail->medicamento->precio->p_unitario;
                                    $sum = $sum + $prod;
                                    @endphp
                                    <td class="d-none d-md-table-cell">
                                        <form action="{{route('detail.destroy', $detail->id)}}" method="POST">
                                            <i class="align-middle" data-feather="edit-2"></i>
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">
                                                Eliminar
                                            </button>
                                        </form>
                                    </td>

                                </tr>

                                @endforeach
                                
                            </tbody>
                        </table>
                        <div class="text-center mt-3">
                            <p>TOTAL S./@php echo $sum @endphp</p>
                            <a href="{{route('ventas.invoice')}}" class="btn btn-primary mt-3">Finalizar Venta</a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('admin.ventas.modal')
@endsection

@section('javascript')
    <script src="{{asset('js/ventas/reniec_dni.js')}}"></script>
    <script src="{{ asset('js/ventas/selectpicker.js') }}"></script>
@endsection
