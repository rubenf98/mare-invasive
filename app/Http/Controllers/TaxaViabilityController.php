<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaxaViabilityRequest;
use App\Http\Resources\TaxaViabilityResource;
use App\Models\TaxaViability;
use App\QueryFilters\TaxaViabilityFilters;
use Illuminate\Http\Request;

class TaxaViabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TaxaViabilityFilters $filters)
    {
        return TaxaViabilityResource::collection(TaxaViability::filterBy($filters)->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaxaViabilityRequest $request)
    {
        $validator = $request->validated();
        $record = TaxaViability::create($validator);

        return new TaxaViabilityResource($record);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TaxaViability  $taxaViability
     * @return \Illuminate\Http\Response
     */
    public function show(TaxaViability $taxaViability)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TaxaViability  $taxaViability
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaxaViability $taxaViability)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaxaViability  $taxaViability
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaxaViability $viability)
    {
        $viability->delete();

        return response()->noContent();
    }
}
