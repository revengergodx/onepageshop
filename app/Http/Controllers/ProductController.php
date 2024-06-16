<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use App\Service\ProductService;

class ProductController extends Controller
{

    public $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $products = Product::all();
        return view('main', compact('products'));
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('dashboard.index');
    }

    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(Product $product, UpdateRequest $request)
    {
        $data = $request->validated();
        $this->service->update($data, $product);
        return redirect()->route('dashboard.index');
    }

    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->route('dashboard.index');
    }

}
