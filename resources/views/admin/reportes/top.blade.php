@extends('layout.template')

@section('title', 'Top Ventas')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Medicamentos mas Vendidos</h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <select class="form-control" name="" id="time">
                            <option value="">Seleccione una opcion de tiempo</option>
                            <option value="1">Día</option>
                            <option value="2">Mes</option>
                            <option value="3">Año</option>
                        </select>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>Nombre Medicamento</th>
                                    <th class="d-none d-md-table-cell">Total de Vendidas</th>
                                </tr>
                            </thead>
                            <tbody id="row-report">
                                @foreach($tops as $top)
                                    <tr>
                                        <td>{{$top->medicamento->n_generico}}</td>
                                        <td>{{$top->total}}</td>
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
    <script src="{{ asset('js/reportes/top.js') }}"></script>
@endsection
