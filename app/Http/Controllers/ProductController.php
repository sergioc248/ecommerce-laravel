<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;

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
}
