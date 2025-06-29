<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('categories.index', ['categories' => Category::all()]);
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
        if (empty($validated['name'])) {
            return back()->withErrors(['name' => 'Please provide a message'])->withInput();
        }
        $validated = $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'is_active' => 'required|string',
        ]);
        $validated['is_active'] = $validated['is_active']=='true';


        $category = Category::create($validated);

        return redirect("/posts/{$category->id}");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $post)
    {
        return view('categories.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $post)
    {
        return view('categories.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $post)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'is_active' => 'required|string',
        ]);
        $validated['is_active'] = $validated['is_active']=='true';

        $post->update($validated);

        return redirect('/posts/'.$post->id)
            ->with('success', "Task $post->id is successfully created");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $post)
    {
        $post->delete();
        return redirect('/posts');
    }
}
