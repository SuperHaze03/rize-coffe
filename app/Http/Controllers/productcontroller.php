<?php

// app/Http/Controllers/ProductController.php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Mengambil semua data produk
        $products = Product::all();

        // Mengirimkan data ke view
        return view('products.index', compact('products'));
    }
}

