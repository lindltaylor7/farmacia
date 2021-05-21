@extends('layout.template')

@section('title', 'Inicio')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Medicamentos</h1>
            <div class="d-flex justify-content-between">
                <input type="text" class="d-inline form-control mb-3 w-75" placeholder="Buscar">
                <a href="{{route('admin.create')}}" class="d-inline h-75 btn btn-primary btn-lg"><i class="align-middle" data-feather="plus"></i>Agregar Medicamento</a>
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
                                    <th class="d-none d-xl-table-cell">Nombre Genérico</th>
                                    <th class="d-none d-xl-table-cell">Nombre Comercial</th>
                                    <th class="d-none d-xl-table-cell">Presentación</th>
                                    <th class="d-none d-xl-table-cell">Concentración</th>
                                    <th class="d-none d-md-table-cell">Precio</th>
                                    <th class="d-none d-md-table-cell">Cantidad</th>
                                    <th class="d-none d-md-table-cell">Laboratorio</th>
                                    <th class="d-none d-md-table-cell">Anaquel</th>
                                    <th class="d-none d-md-table-cell">Modificar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($medicamentos as $medicamento)
                                    <tr>
                                        <td>{{$medicamento->nombre_generico}}</td>
                                        <td>{{$medicamento->nombre_comercial}}</td>
                                        <td>{{$medicamento->presentacion}}</td>
                                        <td>{{$medicamento->concentracion}}</td>
                                        <td>{{$medicamento->precio}}</td>
                                        <td>{{$medicamento->cantidad}}</td>
                                        <td>{{$medicamento->laboratorio}}</td>
                                        <td>{{$medicamento->anaquel}}</td>
                                        <td>
                                            <button class="btn btn-success">Editar</button>
                                            <button class="btn btn-danger">Eliminar</button>
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
