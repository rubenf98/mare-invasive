<?php

namespace App\Http\Controllers;

use App\Http\Resources\TaxaNativeRegionResource;
use App\Models\TaxaNativeRegion;
use Illuminate\Http\Request;

class TaxaNativeRegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TaxaNativeRegionResource::collection(TaxaNativeRegion::paginate(10));
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
     * @param  \App\Models\TaxaNativeRegion  $taxaNativeRegion
     * @return \Illuminate\Http\Response
     */
    public function show(TaxaNativeRegion $taxaNativeRegion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TaxaNativeRegion  $taxaNativeRegion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaxaNativeRegion $taxaNativeRegion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaxaNativeRegion  $taxaNativeRegion
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaxaNativeRegion $taxaNativeRegion)
    {
        //
    }
}
