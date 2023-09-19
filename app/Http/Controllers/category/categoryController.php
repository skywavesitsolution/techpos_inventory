<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use App\Models\category\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index()
    {
        return category::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'slug' => ['required'],
            'metadata' => ['nullable'],
        ]);

        return category::create($request->validated());
    }

    public function show(category $category)
    {
        return $category;
    }

    public function update(Request $request, category $category)
    {
        $request->validate([
            'name' => ['required'],
            'slug' => ['required'],
            'metadata' => ['nullable'],
        ]);

        $category->update($request->validated());

        return $category;
    }

    public function destroy(category $category)
    {
        $category->delete();

        return response()->json();
    }
}
