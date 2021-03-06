<?php

namespace App\Http\Controllers;

use App\Http\Resources\DebrisTypeResource;
use App\Models\DebrisType;
use Illuminate\Http\Request;

class DebrisTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DebrisTypeResource::collection(DebrisType::paginate(10));
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
     * @param  \App\Models\DebrisType  $debrisType
     * @return \Illuminate\Http\Response
     */
    public function show(DebrisType $debrisType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DebrisType  $debrisType
     * @return \Illuminate\Http\Response
     */
    public function edit(DebrisType $debrisType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DebrisType  $debrisType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DebrisType $debrisType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DebrisType  $debrisType
     * @return \Illuminate\Http\Response
     */
    public function destroy(DebrisType $debrisType)
    {
        //
    }
}
