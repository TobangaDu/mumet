<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {

        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = $category->name . ' ';
        }

        return view('dashboard.products', [
            'title' => 'All ' . $title . 'Products',
            'active' => 'posts',
            "products" => Product::latest()->filter(request(['search', 'category']))->paginate(8)->withQueryString()
        ]);
    }

    public function show(Product $product) {
        return view('product', [
            "title" => "product",
            'active' => 'product',
            "product" => $product
        ]);
    }
}
