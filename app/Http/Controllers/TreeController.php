<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use Illuminate\Http\Request;
use Route;

class TreeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trees = Tree::all();
        return view('trees.index', compact('trees'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('trees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Tree::create($request->all());

        return redirect()->route('trees.index')
            ->with('success', 'Tree created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tree $tree)
    {
        return view('trees.show', compact('tree'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tree $tree)
    {
        return view('trees.edit', compact('tree'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tree $tree)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $tree->update($request->all());

        return redirect()->route('trees.index')
                         ->with('success', 'Tree updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tree $tree)
    {
        $tree->delete();

        return redirect()->route('trees.index')
                         ->with('success', 'Tree deleted.');
    }
}
