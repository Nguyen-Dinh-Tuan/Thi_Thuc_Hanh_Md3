<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService)
    {
        return $this->productService = $productService;
    }

    function index()
    {
        $products = $this->productService->getAll();

        return view('products.list', compact('products'));

    }
    function create()
    {
        $product = Product::all();
        $categories = Category::all();
        return view('products.add', compact('product', 'categories'));
    }

    function store(Request $request)
    {
        $this->productService->store($request);

        return redirect()->route('products.index');
    }

    function edit($id)
    {
        $products = Product::all();
        $categories = Category::all();
        $product = $this->productService->getById($id);

        return view('products.edit', compact('product', 'products','categories'));
    }

    function update(Request $request, $id)
    {
        $this->productService->update($request, $id);
        return redirect()->route('products.index');
    }

    function delete($id)
    {
        $product = $this->productService->getById($id);
        Storage::disk('public')->delete($product->image_path);
        $product->delete();
        return redirect()->route('products.index');
    }
}
