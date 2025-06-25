<?php

namespace App\Http\Controllers;

use App\Models\Thing;
use Illuminate\Http\Request;

class ThingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('categories.index', ['categories' => Thing::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'is_active' => 'required|string',
        ]);
        $validated['is_active'] = $validated['is_active']=='true';

        $thing = Thing::create($validated);

        return redirect('/categories/'.$thing->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Thing $thing)
    {
        return view('categories.show', compact('thing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Thing $thing)
    {
        return view('categories.edit', compact('thing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Thing $thing)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'is_active' => 'required|string',
        ]);
        $validated['is_active'] = $validated['is_active']=='true';

        $thing->update($validated);

        return redirect('/categories/'.$thing->id)
            ->with('success', "Task $thing->id is successfully created");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Thing $thing)
    {
        $thing->delete();
        return redirect('/categories');
    }
}
