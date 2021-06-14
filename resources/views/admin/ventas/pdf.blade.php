<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <style>
        @font-face{
            font-family:'Roboto', sans-serif;
            src: url('fuentes/Roboto-Light.ttf');
            font-weight: normal;
            font-style: normal;
        }

        body{
            background-color:white;
            font-family: 'Roboto', sans-serif;
        }

        #container{
            margin: 150px auto;
            width: 600px;
        }

        table{
            width: 100%;
            background-color:white;
            border-collapse: collapse;
            text-align: left;
        }

        th, td{
            border: solid 1px black;
            padding: 15px;
        }

        thead{
            background-color:#246355;
            border-bottom: solid 1px black;
            color: white;
        }

        tr:nth-child(even){
            background-color: #ddd;
        }
        tr:hover td{
            background-color:#369681;
            color: white;
        }
        .columna{
            text-align: center;
        }
        .content-1{
            position: relative;
        }
        .parte-1-izquierda{
            float: left;
            position: absolute;
            top: 1%;
        }
        .parte-1-derecha{
            float: right;
            position: absolute;
            top: 1%;
        }
        .content-2{
            position: relative;
        }
        .parte-2-izquierda{
            clear: both;
            position: absolute;
            top: 4%;
            
        }
        .parte-2-derecha{
            float: right;
            position: absolute;
            top: 4%;
            
        }
        .content-3{
            clear: both;
        }
        

    </style>
    <title>Document</title>
</head>
<body>
    <main class="container">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Boleta de venta</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body m-sm-3 m-md-5">
                            <div class="mb-4">
                                Hola <strong>{{$cliente->name}}</strong>,
                                    @php
                                        $suma=0;
                                     @endphp
                                    @foreach($details as $detail)
                                        @php
                                            $suma=$suma+$detail->utilidad;
                                        @endphp
                                    @endforeach
                                    @php
                                        $igv=($suma*18)/100;
                                    
                                        $total=$suma+$igv;
                                    @endphp
                                <br /> Este es el recibo por el pago de <strong>S/.{{number_format($total, 2, ".", '')}}</strong> (PEN).
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="content-1">
                                        <div class="parte-1-izquierda"><p>Codigo No. <strong>B-00{{$venta->id}}</strong></p></div>
                                        
                                        
                                        <div class="parte-1-derecha"><p >Fecha: <strong>{{date('d/m/Y', strtotime($venta->fecha))}}</strong></p></div>
                                            
                                        
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4" />

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="content-2">
                                        <div class="parte-2-izquierda"><p >Cliente: <strong>{{$cliente->name}}</strong></p></div>
                                        
                                        <div class="parte-2-derecha"><p>Pagado a: <strong>Farmacia Excelentemente</strong></p></div>
                                        
                                    </div>
                                    <div class="content-3"></div>
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
                                            <td class="columna">{{$detail->cantidad}}</td>
                                            <td class="columna">S/{{number_format($detail->utilidad, 2, ".", '')}}</td>
                                        </tr>
                                        
                                    @endforeach
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Subtotal </th>
                                        <th class="text-end">S/{{number_format($suma, 2, ".", '')}}</th>
                                    </tr>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>IGV(18%) </th>
                                        
                                        <th class="text-end">S/{{number_format($igv, 2, ".", '')}}</th>
                                    </tr>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Descuento </th>
                                        <th class="text-end">0%</th>
                                    </tr>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Total </th>
                                        <th class="text-end">S/{{number_format($total, 2, ".", '')}}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
</body>
</html>