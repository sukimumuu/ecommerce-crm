<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $data = Category::all();
        return view('admin-side.category.create', compact('data'));
    }

    protected function store(Request $req){
        Category::create($req->all());
        return back();
    }
}
