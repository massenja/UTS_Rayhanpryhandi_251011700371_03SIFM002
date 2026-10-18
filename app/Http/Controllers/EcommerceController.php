<?php

namespace App\Http\Controllers;

use App\Models\Ecommerce;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function home()
    {
        $featured = Ecommerce::orderByDesc('id')->take(8)->get();
        $categories = Ecommerce::select('category')->distinct()->pluck('category');
        return view('page.home', compact('featured', 'categories'));
    }
    public function index(Request $request)
    {
        $categories = Ecommerce::select('category')->distinct()->pluck('category');
        $query = Ecommerce::query();
        $selectedCategories = array_filter((array) $request->input('category', []));
        if ($selectedCategories !== []) {
            $query->whereIn('category', $selectedCategories);
        }
        match ($request->sort) {
            'termurah' => $query->orderBy('price'),
            'termahal' => $query->orderByDesc('price'),
            default => $query->orderByDesc('id'),
        };
        $products = $query->paginate(12)->withQueryString();
        return view('page.product', compact('products', 'categories'));
    }
    public function show($id)
    {
        $product = Ecommerce::findOrFail($id);
        return view('page.product-detail', compact('product'));
    }
}