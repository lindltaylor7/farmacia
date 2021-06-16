<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Stock;
use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Venta::all();
        $stocks = Stock::all();
        return view('admin.reportes.index', compact('ventas','stocks'));
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

    public function top(){
        $tops=Detail::select('medicamento_id', DB::raw('sum(details.cantidad) as total'))->groupBy('details.medicamento_id')->orderBy('total', 'desc')->get();
        return view('admin.reportes.top', compact('tops'));

    }

    public function bot(){
        $bots=Detail::select('medicamento_id', DB::raw('sum(details.cantidad) as total'))->groupBy('details.medicamento_id')->orderBy('total', 'asc')->get();
        return view('admin.reportes.bot', compact('bots'));
    }

    public function ven(){
        $vens=Stock::select('medicamento_id','f_vencimiento')->where('f_vencimiento', '>', 'now()')->orderBy('f_vencimiento', 'asc')->get();
        return view('admin.reportes.ven', compact('vens'));
    }


}
