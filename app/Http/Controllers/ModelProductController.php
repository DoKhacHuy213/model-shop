<?php

namespace App\Http\Controllers;

use App\Models\ModelProduct;
use Illuminate\Http\Request;

class ModelProductController extends Controller
{
    public function index()
    {
        $products = ModelProduct::all();
        return view('model_products.index', compact('products'));
    }

    public function create()
    {
        return view('model_products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
        ]);

        ModelProduct::create($request->all());
        return redirect()->route('model-products.index')->with('success', 'Sản phẩm đã được thêm.');
    }

    public function edit(ModelProduct $modelProduct)
    {
        return view('model_products.edit', compact('modelProduct'));
    }

    public function update(Request $request, ModelProduct $modelProduct)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
        ]);

        $modelProduct->update($request->all());
        return redirect()->route('model-products.index')->with('success', 'Sản phẩm đã cập nhật.');
    }

    public function destroy(ModelProduct $modelProduct)
    {
        $modelProduct->delete();
        return redirect()->route('model-products.index')->with('success', 'Sản phẩm đã xóa.');
    }
}
