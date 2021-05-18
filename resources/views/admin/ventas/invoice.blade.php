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
                                Hola <strong>Jhon Doe</strong>,
                                <br /> Este es el recibo por el pago de <strong>S./50.00</strong> (PEN).
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="text-muted">Codigo No.</div>
                                    <strong>741037024</strong>
                                </div>
                                <div class="col-md-6 text-md-end">
                                    <div class="text-muted">Fecha</div>
                                    <strong>18 de Mayo del 2021 - 03:45 pm</strong>
                                </div>
                            </div>

                            <hr class="my-4" />

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="text-muted">Cliente</div>
                                    <strong>
                                        Jhon Doe
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
                                        <th class="text-end">Monto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>AdminKit Demo Theme Customization</td>
                                        <td>2</td>
                                        <td class="text-end">$150.00</td>
                                    </tr>
                                    <tr>
                                        <td>Monthly Subscription </td>
                                        <td>3</td>
                                        <td class="text-end">S./25.00</td>
                                    </tr>
                                    <tr>
                                        <td>Additional Service</td>
                                        <td>1</td>
                                        <td class="text-end">S./100.00</td>
                                    </tr>
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


                                <a href="#" class="btn btn-primary">
                                    Imprimir
                                </a>

                                <a href="{{ route('ventas.create') }}" class="btn btn-success">
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
