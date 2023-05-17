<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productlist(Request $request)
    {
        $product = Product::get();
        return view('welcome', compact('product'));
    }
    public function detail($id)
    {
        // Detay sayfası işlemleri burada yapılır

        $product = Product::find($id);

        return view('product.detail', compact('product'));
    }
}
