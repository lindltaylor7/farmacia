@extends('layout.template')

@section('title', 'Inicio')


@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Medicamentos</h1>
            <div class="d-flex justify-content-between">
                <input type="text" class="d-inline form-control mb-3 w-75" id="search_med" placeholder="Buscar">
                <a href="{{route('admin.create')}}" class="d-inline h-75 btn btn-primary btn-lg"><i class="align-middle" data-feather="plus"></i>Agregar Medicamento</a>
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
                                    <th class="d-none d-md-table-cell">Opciones</th>
                                </tr>
                            </thead>
                            <tbody id="dynamic-row">
                                @foreach($medicamentos as $medicamento)
                                    <tr id="row{{$medicamento->id}}">
                                        <td>{{$medicamento->n_generico}}</td>
                                        <td>{{$medicamento->n_comercial}}</td>
                                        <td>{{$medicamento->present}}</td>
                                        <td>{{$medicamento->concent}}</td>
                                        <td>S./2.00</td>
                                        <td>20</td>
                                        <td>{{$medicamento->lab}}</td>
                                        <td>1</td>
                                        <td>
                                            <a href="#" class="btn-editar" id="{{$medicamento->id}}" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="align-middle" data-feather="edit-2"></i></a>
                                            <a href="#" class="btn-eliminar" id="{{$medicamento->id}}"><i class="align-middle" data-feather="trash"></i></a>
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
@include('admin.medicamentos.modal')
</main>
@endsection


