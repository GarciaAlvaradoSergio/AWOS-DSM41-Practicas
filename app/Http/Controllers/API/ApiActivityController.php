<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all();
        return view ('activities.index', compact('activities'));
    }

    public function create()
    {
        $categories = Category::all();
        $statuses = Status::all();
        return view ('activities.add',compact('categories', 'statuses'));
    }

    public function store(StoreActivityRequest $request)
    {
        $activities = Activity::create($request->all());
        return redirect()->route('activities.show', $activities->id)->with('success', 'Actividad creada correctamente');
    }

    public function show(Activity $activity)
    {
        return view ('activities.show', compact('activity'));
    }

    public function edit(Activity $activity)
    {
        $categories = Category::all();
        $statuses = Status::all();
        return view('activities.edit', compact('categories','statuses','activity'));
    }

    public function update(UpdateActivityRequest $request, Activity $activity)
    {
        $data = $request ->all();
        $activity->update($data);
        return redirect()->route('activities.index')->with('messege','Actividad editado correctamente');
    }

    public function destroy(Activity $activity)
    {
        $activity->delete();
        return redirect('activities')->with('danger','Se borro correctamente la actividad');
    }
}
