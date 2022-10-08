<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::with(['galleries'])->paginate(12);
        return view(
            'pages.category',
            [
                'categories' => $categories,
                'products' => $products,
            ]
        );
    }

    public function detail(Request $request, $slug)
    {
        $categories = Category::all();
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = Product::with(['galleries'])->where('categories_id', $category->id)->paginate(12);
        return view(
            'pages.category',
            [
                'categories' => $categories,
                'products' => $products,
            ]
        );
    }
}
