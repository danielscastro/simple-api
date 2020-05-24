<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function store(ProductRequest $request){
        return Product::create($request->validated());
    }

    public function update(Product $product, ProductRequest $request) {
        $product->update($request->validated());
        return $product;
    }

    public function delete(Product $product) {
        $product->delete();
        return response('product deleted', 200);
    }
}
