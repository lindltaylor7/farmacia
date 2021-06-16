@extends('layout.template')

@section('title', 'Menos Vendidos')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Medicamentos menos Vendidos</h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <select class="form-control" name="" id="">
                            <option value="">Día</option>
                            <option value="">Mes</option>
                            <option value="">Año</option>
                        </select>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>Nombre de medicamentos</th>
                                    <th>Ventas</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($bots as $bot)
                                <tr>
                                    <td>{{$bot->medicamento->n_generico}}</td>
                                    <td>{{$bot->total}}</td>
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
