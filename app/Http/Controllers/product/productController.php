<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Models\product\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {
        return product::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'Code' => ['nullable', 'integer'],
            'pro_name' => ['required'],
            'cat_id' => ['nullable'],
            'sub_catID' => ['nullable'],
            'sku' => ['required'],
            'cost_price' => ['required'],
            'retail_price' => ['required'],
        ]);

        return product::create($request->validated());
    }

    public function show(product $product)
    {
        return $product;
    }

    public function update(Request $request, product $product)
    {
        $request->validate([
            'Code' => ['required', 'integer'],
            'pro_name' => ['required'],
            'cat_id' => ['nullable'],
            'sub_catID' => ['nullable'],
            'sku' => ['required'],
            'cost_price' => ['required'],
            'retail_price' => ['required'],
        ]);

        $product->update($request->validated());

        return $product;
    }

    public function destroy(product $product)
    {
        $product->delete();

        return response()->json();
    }
}
