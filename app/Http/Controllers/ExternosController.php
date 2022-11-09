<?php

namespace App\Http\Controllers;

use App\Models\Externos;
use App\Http\Requests\StoreExternosRequest;
use App\Http\Requests\UpdateExternosRequest;

class ExternosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreExternosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExternosRequest $request)
    {
        //
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
