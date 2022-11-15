<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Http\Requests\StorePersonalRequest;
use App\Http\Requests\UpdatePersonalRequest;
use Faker\Provider\ar_EG\Person;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $personal = Personal::all();
        return view('admin.personals.index', compact('personal'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    
        return view('admin.personals.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePersonalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonalRequest $request)
    {
        //
        $personal = new Personal;
        $personal->primer_nombre = $request->pnombre;
        $personal->segundo_nombre = $request->snombre;
        $personal->primer_apellido = $request->papellido;
        $personal->segundo_apellido = $request->sapellido;
        $personal->ci = $request->ci;
        $personal->extension = $request->extension;
        $personal->complemento = $request->complemento;
        $personal->direccion = $request->direccion;
        $personal->usuario_id = $request->usuario;
        $personal->save();
        return redirect('personal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function show(Personal $personal)
    {
        //
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function edit(Personal $personal)
    {
        //envia todo la informacion al fprmulario EDIT
        return view('admin.personals.edit', compact('personal'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonalRequest  $request
     * @param  \App\Models\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonalRequest $request, Personal $personal)
    {
        //

        //  dd($request);  
        $validated = $request->validated();
        $personal->update($request->all());

        return redirect('/personal');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personal $personal)
    {
        //
        $personal->delete();
        return redirect('personal')->with('eliminar','ok');
    }

    public function PersonalCombox()
    {
        $personal = Personal::all();

        dd($personal);
        return view('admin.externo.create', compact('personal'));
    }

}
