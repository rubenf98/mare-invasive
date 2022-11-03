<?php

namespace App\Http\Controllers;

use App\Http\Resources\DebrisRugosityResource;
use App\Models\DebrisRugosity;
use App\QueryFilters\DebrisRugosityFilters;
use Illuminate\Http\Request;

class DebrisRugosityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DebrisRugosityFilters $filters)
    {
        return DebrisRugosityResource::collection(DebrisRugosity::filterBy($filters)->paginate(10));
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
     * @param  \App\Models\DebrisRugosity  $debrisRugosity
     * @return \Illuminate\Http\Response
     */
    public function show(DebrisRugosity $debrisRugosity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DebrisRugosity  $debrisRugosity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DebrisRugosity $debrisRugosity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DebrisRugosity  $debrisRugosity
     * @return \Illuminate\Http\Response
     */
    public function destroy(DebrisRugosity $rugosity)
    {
        $rugosity->delete();

        return response()->noContent();
    }
}
