<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use App\Models\category\subcategory;
use Illuminate\Http\Request;

class subcategoryController extends Controller
{
    public function index()
    {
        return subcategory::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'slug' => ['required'],
            'cat_id' => ['required', 'integer'],
            'metadata' => ['nullable'],
        ]);

        return subcategory::create($request->validated());
    }

    public function show(subcategory $subcategory)
    {
        return $subcategory;
    }

    public function update(Request $request, subcategory $subcategory)
    {
        $request->validate([
            'name' => ['required'],
            'slug' => ['required'],
            'cat_id' => ['required', 'integer'],
            'metadata' => ['nullable'],
        ]);

        $subcategory->update($request->validated());

        return $subcategory;
    }

    public function destroy(subcategory $subcategory)
    {
        $subcategory->delete();

        return response()->json();
    }
}
