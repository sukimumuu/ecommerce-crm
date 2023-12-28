<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products(){
        $products = Products::all();
        return view('admin-side.products.index', compact('products'));
    }

    public function create(){
        return view('admin-side.products.create');
    }

    protected function store(Request $request){
         $request->validate([
            'products_name' => 'required|string',
            'stocks' => 'required|numeric',
            'prices' => 'required|numeric',
            'categories' => 'required|string',
            'tag' => 'required|string',
        ]);
        Products::create($request->all());
        return redirect()->route('products-create')->with('success', 'Produk baru telah ditambahkan');
    }
}
