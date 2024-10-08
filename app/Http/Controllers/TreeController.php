<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use Illuminate\Http\Request;

class TreeController extends Controller
{

    public function index()
    {
        $trees = Tree::all();
        return view('trees.index', compact('trees'));
    }


    public function create()
    {
        return view ('trees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Tree::create($request->all());

        return redirect()->route('trees.index')
            ->with('success', 'Tree created.');
    }

 
    public function show(Tree $tree)
    {
        return view('trees.show', compact('tree'));
    }


    public function edit(Tree $tree)
    {
        return view('trees.edit', compact('tree'));
    }


    public function update(Request $request, Tree $tree)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $tree->update($request->all());

        return redirect()->route('trees.index')
                         ->with('success', 'Tree updated.');
    }

    public function destroy(Tree $tree)
    {
        $tree->delete();

        return redirect()->route('trees.index')
                         ->with('success', 'Tree deleted.');
    }
}
