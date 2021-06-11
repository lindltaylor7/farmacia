@extends('layout.template')

@section('title', 'Boleta o Factura')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Boleta de venta</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body m-sm-3 m-md-5">
                            <div class="mb-4">
                                Hola <strong>{{$cliente->name}}</strong>,
                                <br /> Este es el recibo por el pago de <strong>S./50.00</strong> (PEN).
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="text-muted">Codigo No.</div>
                                    <strong>B-00{{$venta->id}}</strong>
                                </div>
                                <div class="col-md-6 text-md-end">
                                    <div class="text-muted">Fecha</div>
                                    <strong>{{$venta->fecha}}</strong>
                                </div>
                            </div>

                            <hr class="my-4" />

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="text-muted">Cliente</div>
                                    <strong>
                                        {{$cliente->name}}
                                    </strong>

                                </div>
                                <div class="col-md-6 text-md-end">
                                    <div class="text-muted">Pagado a:</div>
                                    <strong>
                                       Farmacia Excelentemente
                                    </strong>

                                </div>
                            </div>

                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Descripción</th>
                                        <th>Cantidad</th>
                                        <th class="text-end">Costo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($details as $detail)
                                        <tr>
                                            <td>{{$detail->medicamento->n_generico}}</td>
                                            <td>{{$detail->cantidad}}</td>
                                            <td class="text-end">S/{{$detail->utilidad}}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Subtotal </th>
                                        <th class="text-end">S./275.00</th>
                                    </tr>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>IGV(18%) </th>
                                        <th class="text-end">S./8.00</th>
                                    </tr>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Descuento </th>
                                        <th class="text-end">5%</th>
                                    </tr>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Total </th>
                                        <th class="text-end">S./268.85</th>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="text-center">


                                <a href="{{route('generarpdf.reporte',$id)}}" class="btn btn-primary">
                                    Imprimir
                                </a>

                                <a href="{{route('ventas.show',$id)}}" class="btn btn-success">
                                    Atrás
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
