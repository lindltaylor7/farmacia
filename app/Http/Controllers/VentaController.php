<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Detail;

use App\Models\Venta;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;



class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas=Venta::all();
        return view('admin.ventas.index', compact('ventas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $venta = Venta::create($request->all());

        return redirect()->route('ventas.show',['id'=> $venta->id]);


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
        $venta = Venta::where('id',$id)->first();
        $details = Detail::where('venta_id', $id)->get();
        $cliente = Cliente::where('id',$venta->cliente_id)->first();
        return view('admin.ventas.venta',compact('id','details','cliente'));
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
        $upd_med = Venta::where('id', $id)->update(['utilidad'=>$request->get('total')]);
        return redirect()->route('ventas.invoice',['id'=> $id]);
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


    public function invoice($id){
        
        $venta = Venta::where('id',$id)->first();
        $details = Detail::where('venta_id', $id)->get();
        $cliente = Cliente::where('id',$venta->cliente_id)->first();
        return view('admin.ventas.invoice', compact('cliente', 'venta', 'details', 'id'));
    }

    public function vista($id)
    {
        $venta = Venta::where('id',$id)->first();
        $details = Detail::where('venta_id', $id)->get();
        $cliente = Cliente::where('id',$venta->cliente_id)->first();
        return view('admin.ventas.pdf', compact('cliente', 'venta', 'details', 'id'));
    }

    public function generarPdf($id){
        $venta = Venta::where('id',$id)->first();
        $details = Detail::where('venta_id', $id)->get();
        $cliente = Cliente::where('id',$venta->cliente_id)->first();
        $pdf = PDF::loadView('admin.ventas.pdf', compact('cliente', 'venta', 'details', 'id'));
        //$pdf->setPaper('a4', 'landscape');
        return $pdf->stream('mi-archivo.pdf');
    }


}
