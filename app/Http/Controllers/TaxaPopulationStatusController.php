<?php

namespace App\Http\Controllers;

use App\Http\Resources\TaxaPopulationStatusResource;
use App\Models\TaxaPopulationStatus;
use Illuminate\Http\Request;

class TaxaPopulationStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TaxaPopulationStatusResource::collection(TaxaPopulationStatus::paginate(10));
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
     * @param  \App\Models\TaxaPopulationStatus  $taxaPopulationStatus
     * @return \Illuminate\Http\Response
     */
    public function show(TaxaPopulationStatus $taxaPopulationStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TaxaPopulationStatus  $taxaPopulationStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaxaPopulationStatus $taxaPopulationStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaxaPopulationStatus  $taxaPopulationStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaxaPopulationStatus $taxaPopulationStatus)
    {
        //
    }
}
