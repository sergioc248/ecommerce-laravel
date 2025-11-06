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
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0|max:999999.99',
            'category' => 'required|exists:category,id',
            'brand' => 'required|exists:brand,id',
        ]);

        $product = new Product;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category');
        $product->brand_id = $request->input('brand');

        $product->save();

        return redirect()->route('admin.products.table')->with('success', 'Product created successfully!');
    }

    public function table()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);

        return view('products.table', ['products' => $products]);
    }
}
