<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $medicamentos = Medicamento::select('medicamentos.*','precios.p_unitario',DB::raw('sum(stocks.cantidad) as total'))
                                    ->leftJoin('precios','precios.medicamento_id','=','medicamentos.id')
                                    ->leftJoin('stocks','stocks.medicamento_id','=','medicamentos.id')
                                    ->groupBy('stocks.medicamento_id')
                                    ->orderBy('medicamentos.n_generico')
                                    ->get();

        return view('admin.inicio.index', compact('medicamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function all(Request $request)
    {
        $medicamentos = Medicamento::select('medicamentos.*','precios.p_unitario',DB::raw('sum(stocks.cantidad) as total'))
                                    ->leftJoin('precios','precios.medicamento_id','=','medicamentos.id')
                                    ->leftJoin('stocks','stocks.medicamento_id','=','medicamentos.id')
                                    ->groupBy('stocks.medicamento_id')
                                    ->orderBy('medicamentos.n_generico')
                                    ->where('n_generico', 'like', '%' . $request->get('search') . '%')
                                    ->orWhere('n_comercial', 'like', '%' . $request->get('search') . '%')
                                    ->get();

        return json_encode($medicamentos);
    }
}
