<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use App\Models\Stock;
use Illuminate\Http\Request;



class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks=Stock::join('medicamentos', 'medicamentos.id', '=', 'stocks.medicamento_id')
        ->orderBy('medicamentos.n_generico', 'asc')
        ->get('stocks.*');
        return view('admin.stocks.index', compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicamentos=Medicamento::all();
        return view('admin.stocks.create', compact('medicamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cantidad' => 'required',
            'anaquel'   => 'required',
            'f_vencimiento' => 'required',
            'f_ingreso'    => 'required',
        ]);

        $stock=Stock::create($request->all());

        return redirect(route('stock.index'));


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
    public function update(Request $request)
    {
        $upd_stock = Stock::where('id', $request->get('id_stock'))->update(request()->except(['_token','id_']));
        return redirect()->back();
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

    public function all(Request $request){
        $stocks=Stock::select('stocks.*','medicamentos.n_generico')
                        ->leftJoin('medicamentos', 'medicamentos.id', '=', 'stocks.medicamento_id')
                        ->where('n_generico','like', '%' . $request->get('search') . '%')
                        ->orderBy('medicamentos.n_generico', 'asc')
                        ->get();

        return json_encode($stocks);
    }

    public function delstock(Request $request){
        $stock = Stock::where('id','=',$request->get('id'))->delete();
        return $stock;
    }

    public function infoedit(Request $request){
        $stock = Stock::where('id',$request->get('id'))->get();
        return json_encode($stock);
    }
}
