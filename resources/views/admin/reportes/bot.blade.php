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
                    </div>
                    <div class="card-body">
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>Ventas</th>
                                    <th>Nombre de medicamentos</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($bots as $bot)
                                <tr>
                                    <td>{{$bot->total}}</td>
                                    <td>{{$bot->medicamento->n_generico}}</td>
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
