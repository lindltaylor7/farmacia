<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use App\Models\Precio;
use Illuminate\Http\Request;


class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicamentos=Medicamento::all();
        return view('admin.medicamentos.index', compact('medicamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.medicamentos.create');
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
            'n_generico' => 'required',
            'nro_caja'   => 'required',
            'p_unitario' => 'required',
            'p_costo'    => 'required',
            'p_caja'     => 'required',
            'utilidad'   => 'required'
        ]);

        $medicamento=Medicamento::create($request->all());

        $request->merge([
            'medicamento_id'=>$medicamento->id
        ]);

        $precio=Precio::create($request->all());

        return redirect(route('admin.index'));
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
        $upd_med = Medicamento::where('id', $request->get('id_med'))->update(request()->except(['_token','id_med']));
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
        $medicamentos = Medicamento::where('n_generico','like','%'.$request->get('search').'%')
                                    ->orWhere('n_comercial','like','%'.$request->get('search').'%')
                                    ->get();
        return json_encode($medicamentos);
    }

    public function infoedit(Request $request){
        $medicamentos = Medicamento::where('id',$request->get('id'))->get();
        return json_encode($medicamentos);
    }

    public function delmedic(Request $request){
        $del_med = Medicamento::where('id',$request->get('id'))->delete();

        return $del_med;
    }
}
