<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubactivityRequest;
use App\Http\Requests\UpdateSubactivityRequest;
use App\Models\Subactivity;
use App\Models\Activity;
use App\Models\Status;

class SubactivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subactivities = Subactivity::all();
        return view ('subactivities.index', compact ('subactivities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activities = Activity::all();
        $statuses = Status::all();
        return view ('subactivities.add',compact('activities', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubactivityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubactivityRequest $request)
    {
        $activities = Subactivity::create($request->all());
        return redirect()->route('subactivities.show', $activities->id)->with('success', 'Subactividad creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subactivity  $subactivity
     * @return \Illuminate\Http\Response
     */
    public function show(Subactivity $subactivity)
    {
        return view ('subactivities.show', compact('subactivity'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subactivity  $subactivity
     * @return \Illuminate\Http\Response
     */
    public function edit(Subactivity $subactivity)
    {
        $activities = Activity::all();
        $statuses = Status::all();
        return view('subactivities.edit', compact('activities','statuses','subactivity'));
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
        $data = $request ->all();
        $subactivity->update($data);
        return redirect()->route('subactivities.index')->with('messege','Sub-actividad editada correctamente');
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
