<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Products;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    function index() {

        $categories = Category::where('status',1)->get();
        return view('products')->with([$categories]);
    }

    function store(Request $req){

        $newCategory = Products::create($req->all());
    }
}
