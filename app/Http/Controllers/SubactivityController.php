<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubactivityRequest;
use App\Http\Requests\UpdateSubactivityRequest;
use App\Models\Subactivity;

class SubactivityController extends Controller
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
     * @param  \App\Http\Requests\StoreSubactivityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubactivityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subactivity  $subactivity
     * @return \Illuminate\Http\Response
     */
    public function show(Subactivity $subactivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subactivity  $subactivity
     * @return \Illuminate\Http\Response
     */
    public function edit(Subactivity $subactivity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubactivityRequest  $request
     * @param  \App\Models\Subactivity  $subactivity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubactivityRequest $request, Subactivity $subactivity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subactivity  $subactivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subactivity $subactivity)
    {
        //
    }
}
