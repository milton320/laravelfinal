<?php

namespace App\Http\Controllers;

use App\Models\Externos;
use App\Http\Requests\StoreExternosRequest;
use App\Http\Requests\UpdateExternosRequest;
use App\Models\Personal;

class ExternosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //para mostrarla tabla
        $externos = Externos::all();
        return view('admin.externo.index', compact('externos'));
    }

    public function PersonalCombox()
    {
        $personal = Personal::all();
        return view('admin.externo.create', compact('personal'));
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $personal = Personal::all();
        return view('admin.externo.create', compact('personal'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExternosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExternosRequest $request)
    {
        //
        
        $externos = new Externos();
        $externos->titulo = $request->titulo;
        $externos->institucion_remitente = $request->institucion_remitente;
        $externos->persona_firmante = $request->persona_firmante;
        $externos->asunto = $request->asunto;
        $externos->fecha_documento = $request->fecha_documento;
        $externos->tipo_documento = $request->tipo_documento;
        $externos->cite = $request->cite;
        $externos->via = $request->via;
        $externos->responsable = $request->responsable;
        $externos->deriva = $request->deriva;
        $externos->fecha_ingreso = $request->fecha_ingreso;
        $externos->personal_id = $request->personal_id;
        $externos->save();
        return redirect('externo');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Externos  $externos
     * @return \Illuminate\Http\Response
     */
    public function show(Externos $externos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Externos  $externos
     * @return \Illuminate\Http\Response
     */
    public function edit(Externos $externos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExternosRequest  $request
     * @param  \App\Models\Externos  $externos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExternosRequest $request, Externos $externos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Externos  $externos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Externos $externos)
    {
        //
    }
   

}
