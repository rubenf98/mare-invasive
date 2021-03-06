<?php

namespace App\Http\Controllers;

use App\Http\Resources\DebrisSubCategoryResource;
use App\Models\DebrisSubCategory;
use Illuminate\Http\Request;

class DebrisSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DebrisSubCategoryResource::collection(DebrisSubCategory::paginate(10));
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
     * @param  \App\Models\DebrisSubCategory  $debrisSubCategory
     * @return \Illuminate\Http\Response
     */
    public function show(DebrisSubCategory $debrisSubCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DebrisSubCategory  $debrisSubCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(DebrisSubCategory $debrisSubCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DebrisSubCategory  $debrisSubCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DebrisSubCategory $debrisSubCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DebrisSubCategory  $debrisSubCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(DebrisSubCategory $debrisSubCategory)
    {
        //
    }
}
