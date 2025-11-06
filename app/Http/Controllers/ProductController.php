<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        $brands = Brand::all();
        $category = Category::all();

        return view('products.create', [
            'brands' => $brands,
            'categories' => $category,
        ]);
    }

    public function show($id, $category = null)
    {
        return view('products.show');
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category');
        $product->brand_id = $request->input('brand');

        $product->save();

        return 'Product created successfully!';
    }
}
