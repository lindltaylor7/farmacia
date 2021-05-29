@extends('layout.template')

@section('title', 'Inicio')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Inicio</h1>
            <div class="d-flex justify-content-between">
                <input type="text" class="d-inline form-control mb-3 w-75" id="search_index" placeholder="Buscar">
                <a href="{{route('admin.create')}}" class="d-inline h-75 btn btn-primary btn-lg"><i class="align-middle" data-feather="plus"></i></a>
            </div>


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th class="d-none d-md-table-cell">Nombre Genérico</th>
                                    <th class="d-none d-md-table-cell">Nombre Comercial</th>
                                    <th class="d-none d-md-table-cell">Presentación</th>
                                    <th class="d-none d-md-table-cell">Concentración</th>
                                    <th class="d-none d-md-table-cell">Precio</th>
                                    <th class="d-none d-md-table-cell">Cantidad</th>
                                    <th class="d-none d-md-table-cell">Laboratorio</th>
                                    <th class="d-none d-md-table-cell">Anaquel</th>

                                </tr>
                            </thead>
                            <tbody id="dynamic-row-index">
                                @foreach($medicamentos as $medicamento)
                                    <tr>
                                        <td>{{$medicamento->n_generico}}</td>
                                        <td>{{$medicamento->n_comercial}}</td>
                                        <td>{{$medicamento->present}}</td>
                                        <td>{{$medicamento->concent}}</td>
                                        <td>S./{{$medicamento->precio->p_unitario}}</td>
                                        <td>20</td>
                                        <td>{{$medicamento->lab}}</td>
                                        <td>1</td>
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
    <script src="{{ asset('js/inicio/search.js') }}"></script>
@endsection
