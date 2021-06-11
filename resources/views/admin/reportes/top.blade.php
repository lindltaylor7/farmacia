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
                    </div>
                    <div class="card-body">
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>Total de vendidas</th>
                                    <th class="d-none d-md-table-cell">Nombre Medicamento</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tops as $top)
                                    <tr>
                                        <td>{{$top->total}}</td>
                                        <td>{{$top->medicamento->n_generico}}</td>
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
